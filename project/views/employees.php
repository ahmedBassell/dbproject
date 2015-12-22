<?php
// var_dump($employees);
foreach ($employees as $emp) {
	$type = $emp['employee_type']? "TA":"Prof.";
	echo $type." ".$emp['name'];
}
?>