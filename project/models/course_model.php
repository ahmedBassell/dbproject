<?PHP
require_once ('models/config/db_config.php');

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
	public function get_student_courses($student_id)
	{
		$sql = "SELECT * FROM course,student_course WHERE student_course.student_id = {$student_id} AND course.id = student_course.course_id";
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
	public function get_course_prerequisites($course_id)
	{
		$sql = "SELECT course.id FROM course_prerequisite, course WHERE course.id = course_prerequisite.prerequisited_course AND course_prerequisite.course_id = {$course_id} ";
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
    public function getallpreq($id)
	{     
		$sql = "SELECT * FROM `course` WHERE `id` IN (SELECT `prerequisited_course` FROM `course_prerequisite` WHERE `course_id` ={$id})";
		$result = $this->db->query($sql);
		return $this->result( $result );

	}
	public function insert_student_course($student_id, $course_id)
	{
		$sql  = "INSERT INTO student_course (student_id, course_id, year, create_time, update_time)";
		$sql .=	" VALUES ('{$student_id}', '{$course_id}', '2016', ";
		$sql .=	" '".date('Y-m-d H:i:s')."', '".date('Y-m-d H:i:s')."') ";
		$result = $this->db->query($sql);
		return $result;
	}
}
?>
