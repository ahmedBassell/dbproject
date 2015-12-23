<?php
require ('models/config/db_config.php');

class student_model extends DatabaseConnect
{
	function __construct()
	{
		parent::__construct();
	}

	public function signup($student)
	{	
		$sql  = "INSERT INTO student (name, address, email, password, department_id, year, is_grad, create_time, update_time)";
		$sql .=	" VALUES ('{$student->name}', '{$student->address}', '{$student->email}', '{$student->password}', ";
		$sql .=	" '{$student->department}', '{$student->year}', '{$student->grad}', '{date('Y-m-d H:i:s')}', '{date('Y-m-d H:i:s')}') ";
		$result = $this->db->query($sql);
		var_dump($result);
		return $result;
	}
}
?>