<?php
require ('models/config/db_config.php');

class employee_model extends DatabaseConnect
{
	function __construct()
	{
		parent::__construct();
	}

	public function get_employees()
	{	
		$sql = "SELECT * FROM employee";
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
}
?>