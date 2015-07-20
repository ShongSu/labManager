﻿
<html>
<head>
<title>Post</title>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />	
<link href="../style.css" rel="stylesheet" type="text/css" />

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
	header("Location:../personal.php?status=3");
	exit();
}

include('../conn.php');
  $userid = $_SESSION['Id_User'];
  $name = $_SESSION['username'];

//echo $name;

?>

</head>
<body>



<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="../index.php"><span>Figeys' Lab</span></a><a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../workshop.html">Resources</a></li>
          <li><a href="../personal.php">My Lab</a></li>
          <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li  class="active"><a href="../gallery.php">Gallery</a></li>
 <li><a href='personal.php?action=logout'>Log Out</a> </li>
          </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>Upload your pictures here</span></h2><div class="clr"></div>
	         <div class="login">

			<p>
			<?php echo $name;  ?>
			posting on <?php echo date('Y-m-d') ; ?>
			</p>

			<form action="upload_file.php" method="post" enctype="multipart/form-data">	
			 	<p><strong>Given a name to your picture: </strong><br />
				<input type='text' name='title' size='80' required="required" placeholder="Title" />
			 	<p><strong>Descripe your picture shortly: </strong><br />
				<input type='text' name='Description' size='80' placeholder="Description" />

				<p><strong>Browse your picture: </strong>
				<input type="file" name="file" id="file" /> 
				<br />
				<br />
				<input type='submit' name='submit' value='Submit' />
				<input type='reset' name='reset' value='Reset'>
			       <a href="../personal.php"><input type='button' name='cancel' value='Cancel'></a><br />
			</p>
				
				
			</form>



			<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Navigation</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="../report.php">Weekly Report</a></li>
            <li><a href="../msbooking.php">MS Booking</a></li>
            <li><a href="../dutytable.php">Lab Duty</a></li>
            <li><a href="../myms.php">My MS</a></li>
            <li><a href="../post.php">Broadcast</a></li>
            <li><a href="mygallery.php">My Gallery</a></li>
            <li><a href="../sops.php">SOPs</a></li>
            <li><a href="../todolist.php">To Do List</a></li>

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
          <li><a href="../index.php">Home</a></li>
          <li><a href="../workshop.html">Resources</a></li>
          <li><a href="../personal.php">My Lab</a></li>
          <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li  class="active"><a href="../gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
