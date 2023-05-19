<?php
include("config.php");
if(isset($_POST['Submit']))
{
	$id=$_POST['id'];
	$name=$_POST['name'];
	$password=$_POST['password'];
	$gender=$_POST['gender'];
	$contactno=$_POST['contactno'];
	$mailid=$_POST['mailid'];
	$address=$_POST['address'];
	$dept=$_POST['dept'];
	$sem=$_POST['sem'];
	$result=mysql_query("insert into Student value('$id','$name','$password','$gender','$contactno','$mailid','$address','$dept','$sem')");
	echo "<script text='text/javascript'>alert('Student Successfully Added');</script>";
	//header("location:AddStudent.php");
}
?>