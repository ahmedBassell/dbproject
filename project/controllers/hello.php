<?php
class hello
{
	public function index()
	{
		echo "hello world!";
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
