
<html>
<head>
<title>Meeting Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Meeting=1");
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
          <h2><span>Meeting Management</span></h2><div class="clr"></div>
     		<p class="meeting"> 
	
		<?php
			echo "<p id='today'>Today is : ";
			echo date('Y-m-d');
			?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="meetingInsert.php">Insert new records</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="fullmeeting.php">All meetings</a>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="personal.php">Back</a>
			</p>
		<div id="Content_Meeting">
	<?php search(); ?>
	</div>






	<?php
		function search()
		{
			include('conn.php');

			$result = mysql_query("select * from meeting where Date >= (select date_format(now(),'%y-%m-%d')) order by Date ASC");
	
			echo "<table border='1' style='border-collapse: collapse; font-size:13px' cellpadding='7'>
			<tr>
			<th>Date</th>
			<th>Work Presentation</th>
			<th>Journal / Workshop</th>
			<th>Venue</th>
			<th>Start</th>
			<th>End</th>
			<th>Operation</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  $rowdate=$row['Date'];
			  echo "<td>" . $row['Date'] . "</td>";
			  echo "<td>" . $row['WorkPrst'] . "</td>";
			  echo "<td>" . $row['JnoPrstWorkshop'] . "</td>";
			  echo "<td>" . $row['Venue'] . "</td>";
			  echo "<td>" . $row['StartTime'] . "</td>";
			  echo "<td>" . $row['EndTime'] . "</td>";
			  $ID=$row['Id_M'];
			  echo "<td> <a href='meetingupdate.php?ID=$ID'>Update</a> <a href='meetingdelete.php?ID=$ID'>Cancel</a> <a href='meetingpostpone.php?ID=$ID'>Postpone</a></td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
		}
	?>
	


				</p>          </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Navigation</h2><div class="clr"></div>
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
           <li><a href="personal.php?action=logout">Log Out</a> </li>

      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
