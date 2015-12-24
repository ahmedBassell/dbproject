<?PHP
require('config/controller.php');
class course extends controller
{
	public function courses()
	{
		require('models/course_model.php');
		$course=new course_model();
		$allcourses=$course->getallcourses();
		include('views/courses.php');
	}
	
	public function my_courses()
	{
		require('models/course_model.php');
		$course=new course_model();
		$my_courses=$course->get_my_courses($_SESSION['student_id']);
		include('views/my_courses.php');
	}
}
?>