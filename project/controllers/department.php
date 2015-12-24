<?PHP

class department
{
	public function departments()
	{
		require('models/department_model.php');
		$dept=new department_model();
		$alldepts=$dept->getalldepts();
		include('views/departments.php');
	}
}
?>