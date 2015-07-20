
<html>
<head>
<title>Lab Duty</title>
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
      <div class="logo"><h1><a href="index.php"><span>Figeys' Lab</span></a><a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
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
          <h2><span>My report history</span></h2>   
		<div class="clr"></div>
	         <div class="login">

		<?php
				$year=$_GET['years'];
				$week=$_GET['weeks'];
//				echo $year."<br />";
///				echo $week."<br />";
//				echo $name."<br />";
				$result = mysql_query("select * from report where Name='$name' and Week='$week' and Year='$year'");
				if($row = mysql_fetch_array($result))
				  {
			 	      echo "Weekly report  " . $row['Date'] ." week " . $row['Week'] . " by ". $row['Name'] ." <a href='myreport.php'>Back</a><br />";
			 	      echo "<table id='schedule' border='1' cellspacing=0 cellpadding=3 >
			 	      		<caption>Weekly Report</caption> 
			 	      		<tr>
							<td colspan='2' style='text-align:left'>".$row['Date'] ." week " . $row['Week'] . " by ". $row['Name']." </td>
							</tr>
							<tr>
							<th style='text-align:left'>Work Review For Last Week</th>
							<td style='text-align:left'>".$row['Review']."</td>
							</tr>
							<tr>
							<th style='text-align:left'>Do you have organized result? </th>
							<td style='text-align:left'>".$row['Result']."</td>
							</tr>
							<tr>
							<th style='text-align:left'>Would you like to discuss/report/QC your data?</th>
							<td style='text-align:left'>".$row['Discuss']."</td>
							</tr>
							<tr>
							<th style='text-align:left'>Work Plan for this week: </th>
							<td style='text-align:left'>".$row['Plan']."</td>
							</tr>
							<tr>
							<th style='text-align:left'>Feedback</th>
							<td style='text-align:left'>".$row['Feedback']."</td>
							</tr> </table>";
							}
						else {
						echo "Sorry, no result found.";
						}
						mysql_close($con);
	
			?>		



			<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
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
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>



