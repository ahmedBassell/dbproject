<?php
class student
{

	var $bu = "http://localhost/college/db/project/index.php/";
	public function index()
	{
		
	}
	public function signup()
	{
		// get posted data
		$student = new stdClass;
		$student->name 			= $_POST['s_name'];
		$student->address 		= $_POST['s_address'];
		$student->email 		= $_POST['s_email'];
		$student->password 		= $_POST['s_password'];
		$student->department 	= $_POST['s_dep'];
		$student->year 			= $_POST['s_year'];
		$student->grad	 		= $_POST['s_grad'];

		// submit data
		include('models/student_model.php');
		$student_model = new student_model();
		if($student_model->signup($student))
		{
			include('views/home.php');
		}
		else
		{
			include('views/errors/mysql_error.php');
		}
		
	}
	public function base_url($segment)
	{
		$base_url = $this->bu;
		$url = $base_url.$segment;
		return $url;
	}
}
