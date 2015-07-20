
<html>
<head>
<title>Human Resources Management</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />

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

$power = mysql_query("select * from users where Name='$name' and Human=1");
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
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>Creat New User</span></h2><div class="clr"></div>
     		<p class="meeting"> 	
     	<div id="Content_Meeting">
		
<?php
	$today=date('Y-m-d');
	$startTime='12:00';
	$endTime='14:00';
	$venue='4161';

	echo " 
	<table border='0'>
	<form action='newuserop.php' method='POST'>

	<input type='hidden' name='rowid' value='$rowid' />
 			
			  			
			<tr id='special'>
			<td id='special'><span>Name:</span></td>
			<td id='special'><input type='text' name='Name'  size='30' required='required'/> </td>
			</tr>
			<tr id='special'>
			<td id='special'></td>
			<td id='special'><span>The original password is same to the user name</span></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Gender:</span></td>
			<td id='special'><input type='text' name='Gender'  size='3' /> M or F</td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Email:</span></td>
			<td id='special'><input type='text' name='Email'  size='50' /></td>
			</tr>
		
			<tr id='special'>
			<td id='special'><input type='submit' name='submit' value='Insert' /></td>
			<td id='special'><a href='human.php'><input type='button' name='cancel' value='Back'></a></td>
			</tr>
			</form></table>";
		

?>

		</div>

	

				</p>          </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">My Lab</a></li>
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
