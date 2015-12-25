<?php
require('config/controller.php');
class getProfs extends controller
{
	
	public function profs()
	{
		require('models/Professor_model.php');
		$prof = new Professor_model();
		$profes = $prof->get_professors();
		require('views/profs.php');
		
	}

}