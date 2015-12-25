<?php
require_once('config/controller.php');
class hello extends controller
{

	public function index()
	{	
		if(!isset($_SESSION['student_id']))
		{
			require_once('views/hello.php');	
		}
		else
		{
			header('Location: '.$this->base_url('student/home'));
		}
	}
	// example function for calling model and calling view
	public function employees()
	{
		
		require_once('models/employee_model.php');
		$emp = new employee_model();
		$employees = $emp->get_employees();
		require('views/employees.php');
		
	}
	public function number($value='0')
	{
		echo $value;
	}
}
