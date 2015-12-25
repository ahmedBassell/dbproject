<?php 
session_start();



$class = '';
$method = '';

$default_class  = "hello";
$default_method = "index";



	function _detect_uri()
	{
		if ( ! isset($_SERVER['REQUEST_URI']) OR ! isset($_SERVER['SCRIPT_NAME']))
		{
			return '';
		}

		$uri = $_SERVER['REQUEST_URI'];
		if (strpos($uri, $_SERVER['SCRIPT_NAME']) === 0)
		{
			$uri = substr($uri, strlen($_SERVER['SCRIPT_NAME']));
		}
		elseif (strpos($uri, dirname($_SERVER['SCRIPT_NAME'])) === 0)
		{
			$uri = substr($uri, strlen(dirname($_SERVER['SCRIPT_NAME'])));
		}

		// This section ensures that even on servers that require the URI to be in the query string (Nginx) a correct
		// URI is found, and also fixes the QUERY_STRING server var and $_GET array.
		if (strncmp($uri, '?/', 2) === 0)
		{
			$uri = substr($uri, 2);
		}
		$parts = preg_split('#\?#i', $uri, 2);
		$uri = $parts[0];
		if (isset($parts[1]))
		{
			$_SERVER['QUERY_STRING'] = $parts[1];
			parse_str($_SERVER['QUERY_STRING'], $_GET);
		}
		else
		{
			$_SERVER['QUERY_STRING'] = '';
			$_GET = array();
		}

		if ($uri == '/' || empty($uri))
		{
			return '/';
		}

		$uri = parse_url($uri, PHP_URL_PATH);

		// Do some final cleaning of the URI and return it
		return str_replace(array('//', '../'), '/', trim($uri, '/'));
	}

	function call_requested_method($url)
	{
		global $default_class;global $default_method;
		
		$x = explode('/',$url);
		if(isset($x[0]) && $x[0]!='')
		{
			$class = $x[0];
			if(isset($x[1]) && $x[1]!='')
			{
				$method = $x[1];
			}
			else{$method = $default_method;}
		}
		else
		{
			$class 	= $default_class	;
			$method = $default_method	;
		}
		

		if ( ! file_exists('controllers/'.$class.'.php'))
		{
			echo "{$class}/{$method} not found" ;
			exit();
		}

		include_once('controllers/'.$class.'.php');
		$c = new $class();
		call_user_func_array(array(&$c, $method),  array_slice($x, 2) );
	}




$url =  _detect_uri();

call_requested_method( $url );

?>