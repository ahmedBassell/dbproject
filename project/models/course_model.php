<?PHP
require ('models/config/db_config.php');

class course_model extends DatabaseConnect
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function getallcourses()
	{
		$sql = "SELECT * FROM course";
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
	
	public function get_my_courses($my_id)
	{
		$sql ="SELECT * FROM student_course, course WHERE student_course.course_id = course.id AND student_course.student_id = {$my_id}";
		//var_dump($sql);
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
}
?>