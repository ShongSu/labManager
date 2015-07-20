
<html>
<head>
<title>Report</title>
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
          <h2><span>My last report</span></h2>   
		<div class="clr"></div>
	         <div class="login">

		<?php
				$year=$_GET['years'];
				$week=$_GET['weeks'];
//				echo $year."<br />";
///				echo $week."<br />";
//				echo $name."<br />";
				$result = mysql_query("select * from report where Name='$name' order by Date Desc limit 1");
				if($row = mysql_fetch_array($result))
				  {
			 	      echo "Weekly report  " . $row['Date'] ." week " . $row['Week'] . " by ". $row['Name'] ." <a href='myreport.php'>Back</a><br />";
			 	      	  $review=$row['Review'];
					  $review=str_replace('<br />',"\r\n" ,$review);
			 	      	  $plan=$row['Plan'];
					  $plan=str_replace('<br />',"\r\n" ,$plan);
					  $rowid=$row['ID'];
				//	  echo $rowid;

					echo '
						<form action="editlastreportop.php" method="post">';
						echo '<input type="hidden" name="rowid" value="'. $rowid . '">';
						echo '
						<p><strong>Work Review For Last Week: </strong><br />
						Brief summary of all the work you have done in last week.<br />
						<textarea name="review" rows="6" cols="50" required="required" placeholder="Brief summary of all the work you have done in last week." >'.$review.'</textarea>
					</p>
						
	
						
					<p><strong>Work Plan for this week: </strong><br />
						List all the work you plan to do for this week.<br />
						<textarea  name="plan" rows="6" cols="50" required="required" placeholder="List all the work you plan to do for this week." >'.$plan.'</textarea>
					</p>

					<p>
					&nbsp;&nbsp;<input type="submit" name="submit" value="Update">
					&nbsp;&nbsp;<input type="reset" name="reset" value="Reset">
					&nbsp;&nbsp;<a href="myreport.php"><input type="button" name="cancel" value="Cancel"></a><br />
					</p>
						
					</form>';
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



