
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
	header("Location:personal.html");
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
          <h2><span>Figeys' Lab MS Request Form</span></h2><div class="clr"></div>
          <p>Please fill out the following to complet your application. We are having more and more samples to go, so we'd better using this booking system to make it fare and less troublesome.</p>
	         <div class="login">



<div>
<p><strong>Your Name: </strong>
<?php echo $name;
	echo '<br />';  ?>
</p>
			
<p><strong>Date: </strong>
<?php echo date('Y-m-d H:i:s') ?>
</p>

<form action="msbookingsubmit.php" method="post">

	
<p><strong>Are your samples ready?</strong><br />
	<input type="radio" checked="checked" name="ready" value="Yes, they are ready" />
	<span>Yes, they are ready</span>
	<br />
	<input type="radio" name="ready" value="No, they will be ready soon" />
	<span> No, they will be ready soon</span>
</p>
	
<p><strong>Digestion Method? </strong><br />
	<input type="radio" checked="checked" name="method" value="In-gel(comassie blue staining)" />
	<span>In-gel(comassie blue staining)</span>
	<br />
	<input type="radio" name="method" value="In-gel(silver staining)" />
	<span>In-gel(silver staining)</span>
	<br />
	<input type="radio" name="method" value="In-solution (urea and desalted)" />
	<span>In-solution (urea and desalted)</span>
	<br />
	<input type="radio" name="method" value="On beads from co-IP sample" />
	<span>On beads from co-IP sample</span>
	<br />
	<input type="radio" name="method" value="SCX/SAX reactor" />
	<span>SCX/SAX reactor</span>
	<br />
	<input type="radio" name="method" value="Lipid extraction" />
	<span>Lipid extraction</span>
	<br />
	<input type="radio" name="method" value="Other" />
	<span>Other: </span>
	<input type="text" name="tmethod" value="Other" />

</p>


<p><strong>Which Equipment would you like to use?</strong><br />
	<input type="radio" checked="checked" name="equipment" value="Orbitrap XL (old one)" />
	<span>Orbitrap XL (old one)</span>
	<br />
	<input type="radio" name="equipment" value="Qtrap5500" />
	<span>Qtrap5500</span>
	<br />
	<input type="radio" name="equipment" value="Oribtrap Elite (new one)" />
	<span>Oribtrap Elite (new one)</span>
	<br />
	<input type="radio" name="equipment" value="Q-Exactive" />
	<span>Q-Exactive</span>
</p>

<p><strong>How long gradient? </strong><br />
	Usually for In-gel 60min for offline SCX fractionation 120min would be OK.
	<br />
	<input type="radio" checked="checked" name="long" value="60long" />
	<span>60</span>
	<br />
	<input type="radio" name="long" value="120long" />
	<span>120</span>
	<br />
	<input type="radio" name="long" value="Other" />
	<span>Other: </span>
	<input type="number" name="tlong" value="" />
</p>
	
<p><strong>How many samples do you have? </strong><br />
	<input type="number" name="tsamples" required="required" min="0" value="0" />
</p>

<p><strong>What project is it related To? </strong><br />
	help to name .raw files, for the purpose of easy looking up
	<br />
	<input type="text" name="tproject" required="required"/>
</p>

<p><strong>What is the species of your sample? </strong><br />
	Helps to do the database search<br />
	<input type="radio" checked="checked" name="species" value="Human" />
	<span>Human</span>
	<br />
	<input type="radio" name="species" value="Mouse" />
	<span>Mouse</span>
	<br />
	<input type="radio" name="species" value="Rat" />
	<span>Rat</span>
	<br />
	<input type="radio" name="species" value="Yeast" />
	<span>Yeast</span>
	<br />
	<input type="radio" name="species" value="CHO" />
	<span>CHO</span>
	<br />
	<input type="radio" name="species" value="Other" />
	<span>Other: </span>
	<input type="text" name="tspecies" value="Other" />
</p>
	
<p><strong>How urgent is your analysis to be done?</strong><br />
	<input type="radio" checked="checked" name="urgent" value="No hurry" />
	<span>No hurry</span>
	<br />
	<input type="radio" name="urgent" value="ASAP" />
	<span>ASAP</span>
	<br />
	<input type="radio" name="urgent" value="Very urgent" />
	<span>Very urgent</span>
	<br />
	<input type="radio" name="urgent" value="Other" />
	<span>Other: </span>
	<input type="text" name="turgent" value="Other" />
</p>
	

<p><strong>What kind of experiment are you doing?</strong><br />
	<input type="radio" checked="checked" name="kind" value=" Protein identification" />
	<span>Protein identification</span>
	<br />
	<input type="radio" name="kind" value="Protein identification and quantification" />
	<span>Protein identification and quantification</span>
	<br />
	<input type="radio" name="kind" value="MRM analysis" />
	<span>MRM analysis</span>
	<br />
	<input type="radio" name="kind" value=" Lipid Analysis" />
	<span>Lipid Analysis</span>
	<br />
	<input type="radio" name="kind" value="Other" />
	<span>Other: </span>
	<input type="text" name="kind" value="Other" />
</p>

<p><strong>Any other info you want to provide to help your analysis? </strong><br />
	
	<textarea  name="comment" rows="6" cols="50" required="required" placeholder="Any other info you want to provide to help your analysis?" ></textarea>
</p>

<p>All samples are basically "first come first server" on each machine.<br />
You will be noticed ahead of time when the instrument is ready.
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
