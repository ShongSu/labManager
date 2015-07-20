

<html>

<head>
<title>Welcome to Figeys' Lab</title>
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
      <div class="logo"><h1><a href="index.php"><span>Intraweb of Figeys' Lab</span></a><small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
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
          <h2><span>Figeys' Lab Product Request Form</span></h2><div class="clr"></div>
          <p>Please fill out the following to complet your application. </p>
	         <div class="login">



<div>
<p><strong>Your Name: </strong>
<?php echo $name;
	echo '<br />';  ?>
</p>
			
<p><strong>Date: </strong>
<?php echo date('Y-m-d H:i:s') ?>
</p>

<form action="ordersubmit.php" method="post">

	
<p><strong>Product Name <font color='red'>*</font></strong><br />
	<input type="text" name="product" size="70" required="required"/>
</p>
	<p><strong>Catalogue # <font color='red'>*</font></strong><br />
	<input type="text" name="catalogue"  size="70" required="required"/>
</p>
	<p><strong>Company <font color='red'>*</font></strong><br />
	<input type="text" name="company"  size="70" required="required"/>
</p>
	<p><strong>Website Link</strong><br />
	<input type="text" name="link" size="70" />
</p>
	<p><strong>Project Related To <font color='red'>*</font></strong><br />
	<input type="text" name="project"  size="70" required="required"/>
</p>
	<p><strong>Remark</strong><br />
	<textarea  name='remark' rows="10" cols="60" required="required" placeholder="Remark here." ></textarea>
</p>

<p>
&nbsp;&nbsp;<input type='submit' name='submit' value='Submit'>
&nbsp;&nbsp;<input type='reset' name='reset' value='Reset'>
&nbsp;&nbsp;<a href="personal.php"><input type='button' name='cancel' value='Cancel'></a><br />
</p>
	
</form>


</div>


	<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Navigation</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="report.php">Weekly Work Report</a></li>
            <li><a href="msbooking.php">MS Booking</a></li>
            <li><a href="dutytable.php">Lab Duty</a></li>
            <li><a href="myms.php">My MS</a></li>
            <li><a href="post.php">Lab BBS</a></li>
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
