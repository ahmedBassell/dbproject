<?PHP

echo "the courses you are enrolled in :"."<br/>";
foreach($allcourses as $c)
{       
	echo  $c['name']."<br/>";
}

foreach($allpreq as $c)
{       
	echo  $c['name']."<br/>";
}
?>

<!DOCTYPE html>
<html lang="en">
<body>
     
</body>
</html>
