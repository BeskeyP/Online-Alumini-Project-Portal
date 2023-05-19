<?php
include("config.php");
if(isset($_POST['Submit']))
{
  $student_id=$_POST['student_id'];
  $project_id=$_POST['project_id'];
  $external_mark=$_POST['external_mark'];
  $internal_mark=$_POST['internal_mark'];
  $total_mark=$_POST['total_mark'];

  
  $result=mysql_query("insert into mark value('$student_id','$project_id','$external_mark','$internal_mark','$total_mark')");
  echo "<script text='text/javascript'>alert('Added Successfully ');</script>";
  header("location:mark.php");
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Project Management</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="css/layout.css" type="text/css" />
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div id="logo">
      <h1><a href="#">Online Alumini Project portal</a></h1>
      
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav" style="width:900px;">
      <ul>
        <li class="active"><a href="Admin.php">Home</a></li>
        <li><a href="StudentEntry.php">StudentEntry</a></li>
        <li><a href="journal.php">Journal Entry</a></li>
        <li><a href="mark.php">Mark Entry</a></li>

    <li><a href="CheckProject.php">CheckProject</a></li>
    <li><a href="ProjectEntry.php">ProjectEntry</a></li>
    <li><a href="Search.php">Search</a></li>
    <li><a href="StudentReport.php">StudentReport</a></li>
        <li class="last"><a href="index.html">Signout</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col3">
  <div id="intro">
    <div class="fl_right"><img src="images/Banner.gif" alt="" /></div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col4">
  
</div>
<div class="wrapper col5">
  <div id="container">
    <div id="content">
      <h1 style="color:#46286F; font-size:36px;">Mark's Entry Page</h1>
    <form id="form1" name="form1" method="post" action="">
    <center>
      <table style="width:60%;color:#990066; font-size:16px; font-weight:bold; font-family:'Times New Roman', Times, serif">
         <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
<td>Project</td>
<td><select name="project_id" id="dept">
<?php
include("config.php");
$result =mysql_query("Select * from Project");
while ($row = mysql_fetch_array($result))
{
?>
<option value="<?php echo $row["ProjectID"]; ?>"> <?php echo $row["Name"]; ?> </option>
<?php
}

?>
</tr>
      <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
<td>Student</td>
<td><select name="student_id" id="dept">
<?php
include("config.php");
$result =mysql_query("Select * from student");
while ($row = mysql_fetch_array($result))
{
?>
<option value="<?php echo $row["StudentID"]; ?>"> <?php echo $row["Name"]; ?> </option>
<?php
}

?>
</tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
 
  <tr>
    <td>external mark  </td>
    <td>
      
        <input type="text" name="external_mark" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>internal mark </td>
    <td><input type="text" name="internal_mark" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>total mark </td>
    <td><input type="text" name="total_mark" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
 
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2">
              <div align="right">
                <input name="Submit" type="submit" value="Submit" style="background-color:#660099; border-bottom-color:whitesmoke; border-width:2px;width:100px;height:30px;color:white;font-weight:bold" />
                &nbsp;</div></td></tr>
        <tr>
          <td colspan="2">&nbsp;</td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>

        <table  border="1" align="center" style="background-color:#99FFFF;">
    <tr>
    <td style="background-color:#00FFFF;color:#000033">#</td>
    <td style="background-color:#00FFFF;color:#000033">student id </td>
    <td style="background-color:#00FFFF;color:#000033"> project id </td>
    <td style="background-color:#00FFFF;color:#000033">external mark</td>
    <td style="background-color:#00FFFF;color:#000033">internal mark</td>
    <td style="background-color:#00FFFF;color:#000033">total mark</td>

    </tr>
  <?php 
include("config.php");
  $r=1;
  $result =mysql_query("Select * from mark");
  while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
    <td><?php echo $r++; ?></td>

    <td><?php echo $row['student_id']; ?></td>

    <td><?php echo $row['project_id']; ?></td>
    <td><?php echo $row['external_mark']; ?></td>
    <td><?php echo $row['internal_mark']; ?></td>
    <td><?php echo $row['total_mark']; ?></td>
    
    
    </tr>
  
  <?php }?>
</table>  
      </center>
    </form>
    </div>
    <div id="column">
      <div class="holder">
        <h2>Project</h2>
        <ul id="latestnews">
          <li> <img class="imgl" src="images/side.jpg" alt="" width="150" height="100"/>
            <p>&nbsp;</p>
          </li>
          <li class="last"> <img class="imgl" src="images/side1.jpg" alt="" width="150" height="100"/>
            <p>&nbsp;</p>
          </li>
      <li class="last"> <img class="imgl" src="images/side2.jpg" alt="" width="150" height="100"/>
            <p>&nbsp;</p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>
<div class="wrapper col6">
  
</div>
<div class="wrapper col7">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2023 - All Rights Reserved - <a href="#">Project Info</a></p>
    <p class="fl_right">Template by <a target="_blank" href="" title="Free Website Templates">Project Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>
