<?php
require('config/controller.php');
class student extends controller
{

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
		if($student_id = $student_model->signup($student))
		{
			$_SESSION['student_id'] = $student_id;
			header('Location: '.$this->base_url('student/home'));
		}
		else
		{
			include('views/errors/mysql_error.php');
		}
		
	}

	public function login()
	{
		// get posted data
		$student = new stdClass;
		$student->email		= $_POST['s_email'];
		$student->password 	= $_POST['s_password'];

		include('models/student_model.php');
		$student_model = new student_model();
		// login
		$student =  $student_model->login($student) ;
		$student =  array_shift($student);
		$student = (object) $student;
		if( $student )
		{
			$_SESSION['student_id'] = $student->id;
			header('Location: '.$this->base_url('student/home'));
		}
		else
		{
			header('Location: '.$this->base_url());	
		}
	}
	public function logout()
	{
		// remove and destroy session variables
		session_unset(); 
		session_destroy(); 
		header('Location: '.$this->base_url());
	}

	



	// private
	public function home()
	{
		if(isset( $_SESSION['student_id'] ))
		{
			$student_id = $_SESSION['student_id'] ;
			$student = $this->get_student($student_id);
			$student =  array_shift($student);
			$student = (object) $student;
			include('views/home.php');	
		}
		else
		{
			header('Location: '.$this->base_url());
		}
		
	}
	private function get_student($student_id)
	{
		include('models/student_model.php');
		$student_model = new student_model();
		return $student_model->get_student($student_id);
	}

}
