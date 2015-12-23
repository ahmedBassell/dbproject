<?PHP

require ('models/config/db_config.php');
class ta_model extends DatabaseConnect
{
	function __construct()
	{
		parent::__construct();
	}
	public function get_allta()
	{
		$sql = "SELECT * FROM employee Where employee_type=1";
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
}
?>