<?PHP
require('config/controller.php');
class course extends controller
{
	public function courses()
	{
		require('models/course_model.php');
		$course=new course_model();
		$allcourses=$course->getallcourses();
		$my_courses=$course->get_student_courses($_SESSION['student_id']);
		include('views/courses.php');
	}
	
	public function my_courses()
	{
		require('models/course_model.php');
		$course=new course_model();
		$my_courses=$course->get_student_courses($_SESSION['student_id']);
		include('views/my_courses.php');
	}
        public function coursespreq()
	{
		require('models/course_model.php');
		$course=new course_model();
		$allpreq=$course->getallpreq($_SESSION['student_id']);
		include('views/courses.php');
	}

	public function request_course($course_id)
	{
		require_once('models/course_model.php');
		$course_model = new course_model();

		$student_id = $_SESSION['student_id'];
		// student courses
		$courses		=$course_model->get_student_courses($student_id);
		// cuorse prerequesites
		$preCourses	=$course_model->get_course_prerequisites($course_id);
		
		$accept = $this->check($preCourses, $courses);
		if($accept)
		{
			$course_model->insert_student_course($student_id, $course_id);
			header('Location: '.$this->base_url('course/courses'));
		}
		else
		{
			require_once('views/course_prequisites.php');
		}
	}
	
	private function check($PreCours,$Cours)
	{
		
		foreach($PreCours as $row1)
		{
			$has_preq = FALSE;
			foreach($Cours as $row2)
			{
				if($row1['id']==$row2['id'])
				{
					$has_preq = TRUE;break;
				}	
			}
			if(!$has_preq)
			{
				return FALSE;
			}
		}
		return TRUE;
	}
}
?>
