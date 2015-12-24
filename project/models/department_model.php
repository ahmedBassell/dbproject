<?PHP
require ('models/config/db_config.php');

class department_model extends DatabaseConnect
{
	function __construct()
	{
		parent::__construct();
	}
	
	public function getalldepts()
	{
		$sql = "SELECT * FROM department";
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
}
?>