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


	public function base_url($segment)
	{
		$base_url = $this->bu;
		$url = $base_url.$segment;
		return $url;
	}



	// private
	public function home()
	{
		$student_id = $_SESSION['student_id'] ;
		$student = (object) array_shift( $this->get_student($student_id) );
		include('views/home.php');
	}
	private function get_student($student_id)
	{
		include('models/student_model.php');
		$student_model = new student_model();
		return $student_model->get_student($student_id);
	}
}
