<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	//$gender=$_POST['gender'];
	$contactno=$_POST['contactno'];
	$fe=$_POST['fe'];
	$be=$_POST['be'];
	$address=$_POST['address'];
	$dept=$_POST['dept'];
	$sem=$_POST['sem'];
	$internal=$_POST['internal'];
	$external=$_POST['external'];
	
	$result=mysql_query("insert into Project value('$id','$name','$password','$contactno','$fe','$be','$address','$dept','$internal','$external','$sem')");
	echo "<script text='text/javascript'>alert('Project Added Successfully ');</script>";
	//header("location:AddStudent.php");
}
?>