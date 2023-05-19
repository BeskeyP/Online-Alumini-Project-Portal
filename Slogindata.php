<?php
include("config.php");
session_start();
unset($_SESSION['uname']);
if(isset($_POST['Submit']))
{

		$name=$_POST['uname'];
		$pass=$_POST['pwd'];
		
		$sql = "select * from Student where StudentID ='$name' and Password='$pass'";
		$result = mysql_query($sql);
		$row = mysql_fetch_array($result);
		$count = mysql_num_rows($result);
		
		if ($count == 1)
		{
		 echo " Login Successful....";
		 $_SESSION['uname'] = $name;
		 header("location:Student.php");
		 }
		 else
		 {
		 //header ("location:Login.php");
		 echo "<script text='text/javascript'>alert('Invalid User');</script>";
		 }
	
}
?>
