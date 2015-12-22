<?php
define (DB_USER, "root");
define (DB_PASSWORD, "123");
define (DB_DATABASE, "dbproject");
define (DB_HOST, "localhost");

class DatabaseConnect
{
	
	function __construct()
	{
	    $conn = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD, DB_DATABASE) or die('Could not connect to MySQL server.');
		$this->db  = $conn;
	}
	public function result( $result )
	{
		$arr = [];
		if (mysqli_num_rows($result) > 0) 
		{
		    // output data of each row
		    while($row = mysqli_fetch_assoc($result)) 
		    {
				$arr[] = $row;
			}
		}
		return $arr;
	}
}
?>