
<html>
<head>
<title>Report Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Report=1");
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
          <h2><span>Report Management</span></h2>
            <div class="clr"></div>
     		<p class="meeting"> 
	<?php
		function search()
		{
			include('conn.php');

			$sechyear = $_POST['year'];
			$sechweek = $_POST['week'];
			$sechname = $_POST['name'];
			
//			echo $sechyear."<br />".$sechweek."<br />".$sechname;

			if($sechweek!='')
			{
				if($sechname!='')
				{
					$statm="SELECT * FROM report WHERE Year='$sechyear' AND Week = '$sechweek' AND Name='$sechname' order by Date DESC";
					$caption="<caption>Reports by $sechname, week $sechweek, $sechyear</caption>"; 
				}
				else
				{
					$statm="SELECT * FROM report WHERE Year='$sechyear' AND Week = '$sechweek'  order by Date DESC";
					$caption="<caption>Reports of week $sechweek, $sechyear</caption>"; 

				}
			}
			else 
			{
				if($sechname!='')
				{
					$statm="SELECT * FROM report WHERE Year='$sechyear' AND Name='$sechname' order by Date DESC";
					$caption="<caption>Reports by $sechname, $sechyear</caption>"; 

				}
				else
				{
					$statm="SELECT * FROM report WHERE Year='$sechyear' order by Date DESC";
					$caption="<caption>Reports of $sechyear</caption>"; 
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
			  $fbyear=$row['Year'];
			  $fbweek=$row['Week'];
 			  $fbname=$row['Name'];

			  echo "<fieldset style='width:100%'>";
			  echo "<legend style='font-size:14px'>".$row['Name'].", ".$row['Date'].", Week ". $row['Week']."</legend>";   
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Review:</strong> <br />".$row['Review']."<br /><br />";
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Plan:</strong><br />".$row['Plan']."<br /><br />"; 			  	  	
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'><a href='reportfeedback.php?Year=$fbyear&Week=$fbweek&Name=$fbname'>Feedback</a>:</strong>".$row['Feedback']."<br />";
			  echo "</fieldset>";


			 
			  
	
			  echo "<br />";
			  }

			mysql_close($con);
		}
	}
	?>



<p><?php search() ?></p>
<a href='reportviewadmin.php'>Back</a>


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
