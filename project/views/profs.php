<?php
// var_dump($employees);
foreach ($profes as $prof) {
	$type = $prof['employee_type'];
	if($type==1)
		echo $type."Prof ".$prof['name']." ";
}
?>