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
}
?>