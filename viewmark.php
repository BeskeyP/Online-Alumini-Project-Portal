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
    <div id="topnav">
       <ul>
        <li class="active"><a href="Student.php">Home</a></li>
        <li><a href="SearchStud.php">Search</a></li>
    <li><a href="ViewAssign.php">Assign Project</a></li>
    <li><a href="viewmark.php">View Mark</a></li>
    <li><a href="viewjournal.php">View Journal</a></li>
        <li class="last"><a href="index.html">Signout</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
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
      <h1 style="color:#46286F; font-size:36px;"> View Mark's</h1>
	  <form id="form1" name="form1" method="post" action="">
	  <center>
      <table style="width:60%;color:#990066; font-size:16px; font-weight:bold; font-family:'Times New Roman', Times, serif">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
       
	          <tr>
	            <td colspan="2">
				
				
				<table width="1000" border="1" align="center" style="background-color:#99FFFF;">
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
  
  <?php  }?>
</table>				</td>
      </tr>
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
      </center>
	  </form>
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
