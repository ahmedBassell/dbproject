<?php
require_once('config/controller.php');
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
			
			//  getting data for display in view
			$depts 		= $this->get_departments();
			$courses 	= $this->get_courses();
			$degrees 	= $this->get_my_degrees();
			// var_dump($depts);
			include('views/home.php');	
		}
		else
		{
			header('Location: '.$this->base_url());
		}
		
	}
	private function get_my_degrees()
	{
		require_once('models/student_model.php');
		$student_model = new student_model();
		$student_id = $_SESSION['student_id'];
		$degrees = $student_model->get_my_degrees($student_id);
		return $degrees;
	}
	private function get_departments()
	{
		require_once('models/department_model.php');
		$dept=new department_model();
		$alldepts=$dept->getalldepts();
		return $alldepts;
	}
	private function get_courses()
	{
		require_once('models/course_model.php');
		$course_model=new course_model();
		$courses=$course_model->getallcourses();
		return $courses;
	}
	private function get_student($student_id)
	{
		require_once('models/student_model.php');
		$student_model = new student_model();
		return $student_model->get_student($student_id);
	}

}
