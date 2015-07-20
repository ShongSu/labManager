
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

	<div>
	<?php
	$fbyear=$_GET['Year'];
	$fbweek=$_GET['Week'];
	$fbname=$_GET['Name'];
	
//	echo $fbyear."<br />";
//	echo $fbweek."<br />";
//	echo $fbname."<br />";
		$result = mysql_query("select * from report where Name='$fbname' and Week='$fbweek' and Year='$fbyear'");

      
			
 			if($row = mysql_fetch_array($result))
			  {
			 	      echo "Weekly report  " . $row['Date'] ." week " . $row['Week'] . " by ". $row['Name'] ."<br />";
			 	      echo "<table id='schedule' border='1' cellspacing=0 cellpadding=3>
			 	      		<caption>Weekly Report</caption> 
			 	      		<tr>
							<td colspan='2'>".$row['Date'] ." week " . $row['Week'] . " by ". $row['Name']." </td>
							</tr>
							<tr>
							<th>Work Review For Last Week</th>
							<td>".$row['Review']."</td>
							</tr>
							<tr>
							<th>Do you have organized result? </th>
							<td>".$row['Result']."</td>
							</tr>
							<tr>
							<th>Would you like to discuss/report/QC your data?</th>
							<td>".$row['Discuss']."</td>
							</tr>
							<tr>
							<th>Work Plan for this week: </th>
							<td>".$row['Plan']."</td>
							</tr>
							<tr>
							<th>Feedback</th>";
							$rowfeedback=$row['Feedback'];

							echo "<td>".$row['Feedback']."</td>
							</tr>
						       </table>";
			  
			}
			else {
			echo "Sorry, no result found.";
			}

			mysql_close($con);

	?>
	</div>
		
<br />
	<div>
	<form action='reportfeedbacksubmit.php' method='POST'>
	<?php 
		$fbyear=$_GET['Year'];
		$fbweek=$_GET['Week'];
		$fbname=$_GET['Name'];
		echo "<input type=hidden name='oldfeedback' value='$rowfeedback' />";
//		echo $rowfeedback;
		echo "<input type=hidden name='fbyear' value=$fbyear />";
		echo "<input type=hidden name='fbweek' value=$fbweek />";
		echo "<input type=hidden name='fbname' value=$fbname />";

	?>
	<span>Add new feedback:</span><br />
	<textarea  name='newfeedback' rows="6" cols="50" required="required"></textarea><br />
	<input type='submit' value='Submit'>
	<a href='reportviewadmin.php'><input type='button' value='Cancel'></a>

	
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
