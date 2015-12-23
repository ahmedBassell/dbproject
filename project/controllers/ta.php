<?PHP
class ta
{
	
	public function tas()
	{
		require('models/ta_model.php');
		$ta=new ta_model();
		$alltas=$ta->get_allta();
		require('models/ta_model.php');
	}
	
}

?>