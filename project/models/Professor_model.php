<?php
require ('models/config/db_config.php');
class Professor_model extends DatabaseConnect
{
	function __construct()
	{
		parent::__construct();
	}
	public function get_professors()
	{	
		$sql = "SELECT * FROM employee Where type=0"; 
		$result = $this->db->query($sql);
		return $this->result( $result );
	}
}
?>