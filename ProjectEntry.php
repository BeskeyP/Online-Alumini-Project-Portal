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
      <h1 style="color:#46286F; font-size:36px;">Project Entry Page</h1>
	  <form id="form1" name="form1" method="post" action="Projdata.php">
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
    <td>Project ID </td>
	<?php
		include("config.php");
		$result =mysql_query("Select MAX(ProjectID) as rno from Project");
		  while ($row = mysql_fetch_array($result))
             {
			 	$roll = $row["rno"] +1;
			 }
		
	?>
    <td><input type="text" name="id" value="<?php echo  $roll ; ?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Project Name </td>
    <td>
      
        <input type="text" name="name" />    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Student ID </td>
    <td><input type="text" name="password" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Contact No </td>
    <td><input type="text" name="contactno" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Front End </td>
    <td><input type="text" name="fe" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Back End </td>
    <td><input type="text" name="be" /></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Internal Mark </td>
    <td><input type="text" name="internal" /></td>
  </tr>
    <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>External Mark</td>
    <td><input type="text" name="external" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Project Description </td>
    <td><textarea rows="4" cols="30" name="address" > </textarea></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Department</td>
    <td><select name="dept" id="dept">
      <option value="BSC CS"> BSC CS </option>
      <option value="BSC IT"> BSC IT </option>
      <option value="BSC CT"> BSC CT </option>
      <option value="BCA"> BCA </option>
    </select></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Year</td>
    <td><input type="text" name="sem" /></td>
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
