<?PHP
echo "Your courses :"."<br/>";
foreach($allcourses as $course)
{
	echo $course['name']."<br/>";

}
 foreach($allpreq as $course_prerequisite)
{
	echo $course_prerequisite['name']."<br/>";

}

?>
