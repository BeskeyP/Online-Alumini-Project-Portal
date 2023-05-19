<?php
include("config.php");
session_start();
unset($_SESSION['uname']);
if(isset($_POST['Submit']))
{
	if($_POST['name']=="Admin" && $_POST['pwd']=="123")
	{
		 header("location:Admin.php");
	}
	else 
	{
	echo "<script text='text/javascript'>alert('Invalid Authentication');</script>";
	}
}
?>
