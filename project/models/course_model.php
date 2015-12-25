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
        public function getallpreq($id)
	{     
		$sql = "SELECT * FROM `course` WHERE `id` IN (SELECT `prerequisited_course` FROM `course_prerequisite` WHERE `course_id` ={$id})";
		$result = $this->db->query($sql);
		return $this->result( $result );

	}
}
?>
