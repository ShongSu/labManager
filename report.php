
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
          <li><a href='personal.php?action=logout'>Log Out</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>Work Report  in Figeys' Lab</span></h2><div class="clr"></div>
          <p>Everybody is required to report on the first workday of Every Week. Send additional data (organized slides, link/data path etc.) to Janice and Zhibin.</p>
	         <div class="login">



<div>
<!-- 
<p><strong>Reporter: </strong>
<?php echo $name;
	echo '<br />';  ?>
</p>
-->
			
<p><strong>Today is: </strong>
<?php echo date('Y-m-d l'); 
	     echo ",    week of ";
	     echo date('W',strtotime(date('Y-m-d')));
	?>
<?php
	$result = mysql_query("select * from notepad where Name='$name' limit 1");

 			if($row = mysql_fetch_array($result))
			  {
			 	$note =  $row['Note'];
			 	
			}
			
	$result2 = mysql_query("select * from report where Name='$name' order by ID DESC limit 1");

 	if($row2= mysql_fetch_array($result2))
			  {
			 	$lastplan=  $row2['Plan'];
			 	
			}
	

			mysql_close($con);
?>				
	
</p>
<!--
<p>For your convinience, "My notepad: is displayed here: <br />

	<textarea name='review' rows="10" cols="70" disabled= "disabled"><?php echo $note; ?></textarea>
</p>
-->

<fieldset style="width:80%">
    <legend>My Notepad: </legend>
      <p>  <?php echo $note; ?> </p>
   
</fieldset>


<fieldset style="width:80%">
    <legend>My last week's plan: </legend>
      <p>  <?php echo $lastplan; ?> </p>
   
</fieldset>

<form action="reportsubmit.php" method="post">
<p><strong>Work Review For Last Week: </strong><br />
	Brief summary of all the work you have done in last week.<br />
	<textarea name='review' rows="10" cols="70" required="required" placeholder="Brief summary of all the work you have done in last week." ></textarea>
</p>
	
<p><strong>Do you have organized result? </strong><br />
       If yes, send them right away to both <a href="mailto:maynejanice@gmail.com">maynejanice@gmail.com</a> 
	and <a href="mailto:ningzhibin@gmail.com">ningzhibin@gmail.com</a><br />
	<input type="radio" checked="checked" name="organized" value="Yes, some slides" />
	<span>Yes, some slides</span>
	<br />
	<input type="radio" name="organized" value="Yes, some raw data" />
	<span>Yes, some raw data</span>
	<br />
	<input type="radio"  name="organized" value="No, not this week" />
	<span>No, not this week</span>

</p>
	
<p><strong>Would you like to discuss/report/QC your data?</strong><br />
	<input type="radio" checked="checked" name="discuss" value="Yes, with Janice" />
	<span>Yes, with Janice</span>
	<br />
	<input type="radio" name="discuss" value="Yes, with Zhibin" />
	<span>Yes, with Zhibin</span>
	<br />
	<input type="radio"  name="discuss" value="Yes, with both" />
	<span>Yes, with both</span>
	<br />
	<input type="radio"  name="discuss" value="No, not this time" />
	<span>No, not this time</span>
</p>
	
<p><strong>Work Plan for this week: </strong><br />
	List all the work you plan to do for this week.<br />
	<textarea  name='plan' rows="10" cols="70" required="required" placeholder="List all the work you plan to do for this week." ></textarea>
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
