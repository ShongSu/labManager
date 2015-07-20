
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
	<?php
		function search()
		{
			include('conn.php');

			$fromdate = $_POST['fromdate'];
			$todate = $_POST['todate'];
			$assignedto = $_POST['assignedto'];
			$createdby = $_POST['createdby'];
		
//			echo $sechyear."<br />".$sechweek."<br />".$sechname;

			if($assignedto!='')
			{
				if($createdby!='')
				{
					$statm="SELECT * FROM todolist WHERE Owner='$assignedto' AND Createdby = '$createdby' AND SetupDate Between '$fromdate' and '$todate' order by SetupDate DESC";
				}
				else
				{
					$statm="SELECT * FROM todolist WHERE Owner='$assignedto'  AND SetupDate Between '$fromdate' and '$todate' order by SetupDate DESC";

				}
			}
			else 
			{
				if($createdby!='')
				{
					$statm="SELECT * FROM todolist WHERE Createdby = '$createdby' AND SetupDate Between '$fromdate' and '$todate' order by SetupDate DESC";

				}
				else
				{
					$statm="SELECT * FROM todolist WHERE SetupDate Between '$fromdate' and '$todate' order by SetupDate DESC";
				}
			}

			$result = mysql_query($statm);
			if(!mysql_num_rows($result))
			{
				echo "No result found!";
			}
			else {
  			while($row = mysql_fetch_array($result))
			{
				$rowid=md5($row['ID']);
			  echo "<fieldset style='width:100%'>";
			  echo "<legend style='font-size:14px'>To ".$row['Owner'].", Created by ".$row['Createdby']." </legend>";   
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Setup Date: </strong>".$row['SetupDate']."<strong style='font-size:14px;font-variant:small-caps'>        Status: </strong>".$row['Status']."<strong style='font-size:14px;font-variant:small-caps'>        Finished time: </strong>". $row['FinishTime']."<br />";
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Task: </strong>".$row['Content']."<br />";
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>  Project related to: </strong>".$row['Project']."<br />"; 			
	  		 echo "<strong style='font-size:14px;font-variant:small-caps'><a href='taskcomment.php?ID=$rowid'>Comment</a>:</strong><br />".$row['Comment']."<br />";
			  echo "</fieldset>";
			 echo "<br />";

			}


			mysql_close($con);
		}
	}
	?>



<p><?php search() ?></p>
<a href='assign.php'>Back</a>


				</p>          </div>
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
