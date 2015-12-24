<?php
require('config/controller.php');
class hello extends controller
{

	public function index()
	{	
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
}
