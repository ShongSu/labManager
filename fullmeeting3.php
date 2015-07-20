<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Meeting Schedule</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->

	<?php
		function search()
		{
			include('conn.php');
			$yourDate = htmlspecialchars($_POST['searchForm2']);
			echo "<p>Result-Search by Date:  ";
			echo 	$yourDate. "</p>";
			$sql_select="SELECT * FROM meeting where Date = ' " . $yourDate . " ' ";
		//	$sql_select="SELECT * FROM meeting where WorkPrst like '%".$yourName.";
			$result = mysql_query($sql_select);
			if ($n=mysql_num_rows($result)<=0)
				echo "No result found!";
			else
			{
				echo "<table id='schedule'>
				<tr>
				<th>Date</th>
				<th>Work Presentation</th>
				<th>Journal Presentation / Workshop</th>
				<th>Venue</th>
				<th>Start</th>
				<th>End</th>
				</tr>";
			}
	
			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Date'] . "</td>";
			  echo "<td>" . $row['WorkPrst'] . "</td>";
			  echo "<td>" . $row['JnoPrstWorkshop'] . "</td>";
			  echo "<td>" . $row['Venue'] . "</td>";
			  echo "<td>" . $row['StartTime'] . "</td>";
			  echo "<td>" . $row['EndTime'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";
		
	

			mysql_close($con);
			echo "<br />";
			echo "<a href='fullmeeting.php'>Start New Search</a>";

		}
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
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
 
      <div class="mainbar">
        <div class="article">
          <h2>Figeys' Lab Meeting Schedule  </h2><div class="clr"></div> 
     </div><div class="meeting"> <?php search(); ?></div>
</div>

      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="meeting.php"><strong>Lab Meeting</strong></a></li>
            <li><a href="resources.php"><strong>Lab Resources</strong></a></li>
            <li><a href="fridge.php"><strong>Freezer and Fridge</strong></a></li>
            <li><a href="msstatus.php"><strong>MS Utility Status</strong></a></li>

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
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
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
