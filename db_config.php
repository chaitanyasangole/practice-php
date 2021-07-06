<?php 

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	$msg=mysqli_connect_error();
	echo $msg;
	die();
}

mysqli_select_db($con,'degree360') or die("Could not connect o the database");

?>