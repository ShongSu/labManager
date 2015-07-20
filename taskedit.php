
<html>
<head>
<title>Lab Duty</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
    html{font-size:14px;}
	fieldset{width:520px; margin: 0 auto;}
	legend{font-weight:bold; font-size:16px;}
	label{float:left; width:100px; margin-left:10px;}
	.left{margin-left:80px;}
	.input{width:150px;}

  </style>

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
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>My Task</span></h2>   
		<div class="clr"></div>
	         <div class="login">

<?php
	$ID=$_GET['id'];
	include('conn.php');
	$today=date('Y-m-d');
	$result = mysql_query("select * from todolist where md5(ID) = '$ID'");
	
	while($row = mysql_fetch_array($result))
	{
	$rowOwner=$row['Owner'];
	$rowSetupDate=$row['SetupDate'];
	$rowContent=$row['Content'];
	$rowStatus=$row['Status'];
	$rowFinishTime=$row['FinishTime'];
	$rowCreatedby=$row['Createdby'];
	$rowComment=$row['Comment'];
	$rowProject=$row['Project'];

	echo "
	<table broder='0'>
	<tr id='special'>
	<form action='taskeditop.php' method='POST'>
	<input type='hidden' name='ID' value='$ID' />
	<td id='special'><span>Owner:</span></td>
	<td id='special'><input type='text' name='Owner' value='$rowOwner'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Setup Date:</span></td>
	<td id='special'><input type='date' name='SetupDate' value='$rowSetupDate'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Task:</span></td>
	<td id='special'><input type='text' name='Content' value='$rowContent'   disabled='disabled'  size='50' /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Project:</span></td>
	<td id='special'><input type='text' name='Project' value='$rowProject'  disabled='disabled' size='50' /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Created by:</span></td>
	<td id='special'><input type='text' name='Createdby' value='$rowCreatedby'  disabled='disabled'  /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Status:</span></td>
	<td id='special'>
		<select name='Status'>
		<option value='$rowStatus'>$rowStatus</option>
		<option value='In Process'>In Process</option>
		<option value='Finished'>Finished</option>
		<option value='Reprocess'>Reprocess</option>
		<option value='Cancelld'>Cancelled</option>
	</td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Operated Time:</span></td>
	<td id='special'><input type='date' name='FinishTime' value='$today'  /></td>
	</tr>
	<tr id='special'>
	<td id='special'><input type='submit' name='submit' value='Update' /></td>
	<td id='special'><a href='todolist.php'><input type='button' name='cancel' value='Back'></a></td>
	</tr>
	</form>
	</table>	
	";
			
	}		


	mysql_close($con);
	
	
	
	?>

			<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="report.php">Weekly Report</a></li>
            <li><a href="msbooking.php">MS Booking</a></li>
            <li><a href="dutytable.php">Lab Duty</a></li>
            <li><a href="myms.php">My MS</a></li>
            <li><a href="post.php">Broadcast</a></li>
            <li><a href="gallery/mygallery.php">My Gallery</a></li>
            <li><a href="sops.php">SOPs</a></li>
            <li><a href="todolist.php">To Do List</a></li>

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
