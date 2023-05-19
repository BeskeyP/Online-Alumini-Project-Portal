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
      <h1 style="color:#46286F; font-size:36px;"> Search Project Dept and Year Vise</h1>
	  <form id="form1" name="form1" method="post" action="">
	  <center>
      <table style="width:60%;color:#990066; font-size:16px; font-weight:bold; font-family:'Times New Roman', Times, serif">
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td colspan="2" align="center" style="font-size:18px; font-weight:bold">Year &nbsp;&nbsp;
              <input type="text" name="name" /></td>
        </tr>
        <tr>
              <td colspan="2" align="center" style="font-size:18px; font-weight:bold">Department &nbsp;&nbsp;
                <select name="dept" id="dept">
                  <option value="BSC CS"> BSC CS </option>
                  <option value="BSC CT"> BSC CT </option>
                  <option value="BSC IT"> BSC IT </option>
                  <option value="BCA"> BCA </option>
                </select></td>
            </tr>
	                <tr>
	                  <td colspan="2" style="font-size:18px; font-weight:bold" align="center">&nbsp;</td>
                    </tr>
	                <tr>
                <td colspan="2" style="font-size:18px; font-weight:bold" align="center"><input type="submit" name="Submit" value="Search" style="width:100px;height:30px; background-color:#003366; color:#FFFFFF"/></td>
	            </tr>
				
				
			
				
				
				
	                <tr>
                      <td colspan="2" style="font-size:18px; font-weight:bold" align="center">&nbsp;</td>
                    </tr>
	          <tr>
	            <td colspan="2">
				
				
				<table width="900" border="1" align="center" style="background-color:#99FFFF;">
    <tr>
		<td style="background-color:#00FFFF;color:#000033">Project ID</td>
		<td style="background-color:#00FFFF;color:#000033">Name</td>
		<td style="background-color:#00FFFF;color:#000033"> Student ID</td>
		
		<td style="background-color:#00FFFF;color:#000033">Front End </td>
		<td style="background-color:#00FFFF;color:#000033">BackEnd</td>
		<td style="background-color:#00FFFF;color:#000033">Description</td>
		<td style="background-color:#00FFFF;color:#000033">Department</td>
		<td style="background-color:#00FFFF;color:#000033">Year </td>
    </tr>
	<?php 
include("config.php");
if(isset($_POST['Submit']))
{
	$name=$_POST['name'];
	$dept=$_POST['dept'];
	$result =mysql_query("Select * from Project where Year = '$name' and Department = '$dept'");
	$id = $_POST['menu1'];
	while ($row = mysql_fetch_array($result))
          {
    ?>
    <tr>
	  <td><?php echo $row['ProjectID']; ?></td>
	  <td><?php echo $row['Name']; ?></td>
	  <td><?php echo $row['StudentID']; ?></td>
	  
	  <td><?php echo $row['FrontEnd'];?></td>
	  <td><?php echo $row['BackEnd'];?></td>
      <td><?php echo $row['Description']; ?></td>
	  <td><?php echo $row['Department']; ?></td>
	  <td><?php echo $row['Year']; ?></td>
	  
    </tr>
  
  <?php } }?>
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
