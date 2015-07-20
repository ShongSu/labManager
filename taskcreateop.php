
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
      <div class="logo"><h1><span>Figeys' Lab</span> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">About Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize" >
      <div class="mainbar"  style='width:96%'>

        <div class="article">
          <h2><span>Create New Task</span></h2><div class="clr"></div>
	         <div class="login">



<div>

<?php

	$SetupDate=date('Y-m-d');

	$Task=$_POST['Task'];
	$Project=$_POST['Project'];
	$finishtime='Setup: '.$SetupDate.'<br />';


	include('conn.php');
	$insert = mysql_query("INSERT INTO todolist (Owner, SetupDate, Content, Status, Createdby, Project, FinishTime) VALUES ('$name', '$SetupDate', '$Task', 'Setup', '$name', '$Project','$finishtime')");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The task has been created successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='todolist.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('create failed.') </script> ";
           	    echo "<script language='javascript'> self.location='todolist.php'</script> ";

        }

   	mysql_close($con);

	?>


</div>


	<br />


	        </div>
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
          <li class="active"><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">About Us</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
