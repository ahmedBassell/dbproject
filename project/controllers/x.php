<?php
class x
{

	var $bu = "http://localhost/college/db/project/index.php/";
	public function index()
	{
		echo $this->base_url;	
		include('views/hello.php');
	}
	// example function for calling model and calling view
	public function employees()
	{
		
		require('models/employee_model.php');
		$emp = new employee_model();
		$employees = $emp->get_employees();
		require('views/employees.php');
		
	}
	public function base_url($segment)
	{
		$base_url = $this->bu;
		$url = $base_url.$segment;
		return $url;
	}
       public function start ()
	{        
                $x = "Hello maha";
		echo $x;
	}
}
