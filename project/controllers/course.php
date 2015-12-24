<?PHP

class course
{
	public function courses()
	{
		require('models/course_model.php');
		$course=new course_model();
		$allcourses=$course->getallcourses();
		include('views/courses.php');
	}
}
?>