<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Figeys' Lab</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/tab.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['Id_User'])){
	header("Location:personal.php");
	exit();
}

include('conn.php');
$userid = $_SESSION['Id_User'];
 $name = $_SESSION['username'];

$power = mysql_query("select * from users where Name='$name' and MS=1");
if(!mysql_num_rows($power)){
	header("Location:personal.php");
	exit();
}

//echo $name;

?>

</head>
<body>

<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><span>Figeys' Lab</span> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>

      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
           <li><a href="personal.php?action=logout">Log Out</a> </li>
        </ul>
<!--        <div class="searchform">
            <form id="formsearch" name="formsearch" method="post" action="">
            <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
            <span><input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search" type="text" /></span>
          </form>
        </div>     --> 
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          	<h2>Edit</h2>
	<div class="clr"></div>
        </div>
        
        <div class="meeting">  
 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
	
<?php
	$ID=$_GET['ID'];
	include('conn.php');
	$result = mysql_query("SELECT * FROM msstatus where MS_ID=$ID");
	
	while($row = mysql_fetch_array($result))
	{
	$rowTime=$row['Time_K'];
	$rowName=$row['Name'];
	$rowGradient=$row['Gradient'];
	$rowExamples=$row['Examples'];
	$rowSpecies=$row['Species'];
	$rowUrgent=$row['Urgent'];
	$rowLabeling=$row['Labeling'];
	$rowProject=$row['Project'];
	$rowDigestion=$row['Digestion'];
	$rowEquipment=$row['Equipment'];
	$rowFinished=$row['Finished'];
	$rowComment=$row['Comment'];
	$currentDate=date('Y-m-d');
	$currentTime=date('H:i');

	echo "
	<table broder='0'>
	<tr id='special'>	
	<form action='mseditadminop.php' method='POST'>
	<input type='hidden' name='ID' value='$ID' />
	<td id='special'><span>Timestamp:</span></td>
	<td id='special'><input type='text' name='Time' value='$rowTime'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Name:</span></td>
	<td id='special'><input type='text' name='Name' value='$rowName' disabled='disabled'  /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>How long gradient?</span></td>
	<td id='special'><input type='text' name='Gradient' value='$rowGradient' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>How many samples do you have?</span></td>
	<td id='special'><input type='text' name='Examples' value='$rowExamples'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>What is the species of your sample?</span></td>
	<td id='special'><input type='text' name='Species' value='$rowSpecies'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>How urgent is your analysis to be done?</span></td>
	<td id='special'><input type='text' name='Urgent' value='$rowUrgent'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>choose the labeling strategy</span></td>
	<td id='special'><input type='text' name='Labeling' value='$rowLabeling' disabled='disabled' size='40'/></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>What project is it related To?</span></td>
	<td id='special'><input type='text' name='Project' value='$rowProject' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Digestion Method?</span></td>
	<td id='special'><input type='text' name='Digestion' value='$rowDigestion' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Equipment:</span></td>
	<td id='special'><input type='text' name='Equipment' value='$rowEquipment' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Comment:</span></td>
	<td id='special'><textarea name='Comment' rows='5' cols='40' disabled='disabled'>$rowComment</textarea></td>
	</tr>

	<tr id='special'>	
	<td id='special'><span>Finished?</span></td>
	<td id='special'><select name='Finished'>
	<option value='$rowFinished'>$rowFinished</option>
		<option value='Analyzing'>Analyzing</option>
		<option value='Waiting'>Waiting</option>
		<option value='Finished'>Finished</option>
	</select>
	<input type='date' name='spDate' value='$currentDate' />
	<input type='time' name='spTime' value='$currentTime' /></td>

	</tr>
	<tr id='special'>	
	<td id='special'><input type='submit' name='submit' value='Update' /></td>
	<td id='special'><a href='msadmin.php'><input type='button' name='cancel' value='Back' /></a></td>
	</tr>
	</form>
	</table>
	";
			
	}		


	mysql_close($con);
	
	
	
	?>







	


				</p> 
			 </div>
      	</div>
      	</div>

		
        </div>
       
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li ><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>

          </ul>
        </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright © <a href="#">2014 OISB</a>. All rights reserved.</p>
      <ul class="fmenu">
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>

</html>
