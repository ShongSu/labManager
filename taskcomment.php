
<html>
<head>
<title>Task Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Task=1");
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
          <h2><span>Task Management</span></h2>
            <div class="clr"></div>
     		<p class="meeting"> 

	<div>
	<?php
	$rowid=$_GET['ID'];
	
//	echo $fbyear."<br />";
//	echo $fbweek."<br />";
//	echo $fbname."<br />";
		$result = mysql_query("select * from todolist where md5(ID)='$rowid' limit 1");

      
			
 			if($row = mysql_fetch_array($result))
			  {	
				  echo "<fieldset style='width:100%'>";
				  echo "<legend style='font-size:15px'>To ".$row['Owner'].", Created by ".$row['Createdby']." </legend>";   
		  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Setup Date: </strong>".$row['SetupDate']."<br />";
		  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Task: </strong>".$row['Content']."<br />";
		  		  echo "<strong style='font-size:14px;font-variant:small-caps'>  Project related to: </strong>".$row['Project']."<br />"; 			
		  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Status: </strong>".$row['Status']."<br />";
		  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Finished Time: </strong>".$row['FinishTime']."<br />";

		  		 echo "<strong style='font-size:14px;font-variant:small-caps'>Comment:</strong><br />".$row['Comment']."<br />";
		  		 $rowfeedback=$row['Comment'];
				  echo "</fieldset>";
				 echo "<br />";			  
			}
			else {
			echo "Sorry, no result found.";
			}

			mysql_close($con);

	?>
	</div>
		
<br />
	<div>
	<form action='taskcommentsubmit.php' method='POST'>
	<?php 
		echo "<input type=hidden name='oldfeedback' value='$rowfeedback' />";
//		echo $rowfeedback;
		echo "<input type=hidden name='rowid' value=$rowid />";

	?>
	<span>Add new comment:</span><br />
	<textarea  name='newfeedback' rows="6" cols="50" required="required"></textarea><br />
	<input type='submit' value='Submit'>
	<a href='assign.php'><input type='button' value='Cancel'></a>

	
	</form>
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
