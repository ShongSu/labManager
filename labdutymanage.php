
<html>
<head>
<title>Lab duties Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Recources=1");
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
          <h2><span>Lab Duties Management</span></h2><div class="clr"></div>
     		<p class="meeting"> 
	
		<?php
			echo "<p id='today'>Today is : ";
			echo date('Y-m-d');
			?>
			&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="labdutyInsert.php">Insert new Lab duty</a>
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
			$currentyear=date('Y');
			$currentweek=date('W');

			$result = mysql_query("select * from labduty where (Year=$currentyear and  Week >=$currentweek) or (Year>$currentyear) order by Year ASC, Week ASC");
	
			echo "<table border='1' style='border-collapse: collapse; font-size:13px' cellpadding='7'>
			<tr>
			<th>Year</th>
			<th>Week</th>
			<th>From</th>
			<th>_To__</th>
			<th>Autoclaving Dishes</th>
			<th>Changing Biohazard bags and dropping off</th>
			<th>Regular Cleanin</th>
			<th>pH meter</th>
			<th>-80 Freezer</th>
			<th>Lab Restocking</th>
			<th>Operation</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
		//	  $rowdate=$row['Date'];
			  echo "<td>" . $row['Year'] . "</td>";
			  echo "<td>" . $row['Week'] . "</td>";
			  $rowyear=$row['Year'];
			  $rowweek=$row['Week'];
			  $from=date('m-d',strtotime(date($row['D_From'])));
			  echo "<td>" . $from . "</td>";
			  $to=date('m-d',strtotime(date($row['D_To'])));
			  echo "<td>" . $to . "</td>";	
			   echo "<td>" . $row['AD_Duty'] . "</td>";
			  echo "<td>" . $row['CB_Duty'] . "</td>";
			  echo "<td>" . $row['RC_Duty'] . "</td>";
			  echo "<td>" . $row['PM_Duty'] . "</td>";
			  echo "<td>" . $row['F_Duty'] . "</td>";
			  echo "<td>" . $row['LR_Duty'] . "</td>";
	//		  $ID=$row['Id_M'];
			  echo "<td> <a href='labdutyupdate.php?Year=$rowyear&Week=$rowweek'>Update</a></td>";
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
