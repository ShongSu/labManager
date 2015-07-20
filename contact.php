
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
	header("Location:personal.php");
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
      <div class="logo"><h1><a href="index.php"><span>Intraweb of Figeys' Lab</span></a><small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <li><a href='personal.php?action=logout'>Log Out</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>Contact of Figeys' Lab</span></h2><div class="clr"></div>
     		<p class="meeting"> 	
     	<div id="Content_Meeting">
		<?php search(); ?>
		</div>

	<?php
		function search()
		{
			include('conn.php');

			$result = mysql_query("select * from users where Display=1  order by Name");
	
			echo "<table border='1' style='border-collapse: collapse' cellpadding='7'>
			<tr>
			<th>Name</th>
			<th>Email</th>
			<th>Cell Phone</th>
			<th>Extention</th>
			<th>Room</th>
			<th>Birthday</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  $id=$row['Id_User'];
			  echo "<td>" . $row['Name'] . "</a></td>";
			  echo "<td>" . $row['Email'] . "</td>";
			  echo "<td>" . $row['Phone'] . "</td>";
			  echo "<td>" . $row['Extention'] . "</td>";
			  echo "<td>" . $row['Room'] . "</td>";
			  $birth=$row['Birthday'];
			  $birth=date('m-d',strtotime($birth));
			  echo "<td>" . $birth . "</td>";
		//	  $ID=$row['Id_M'];
		//	  echo "<td> <a href='meetingupdate.php?ID=$ID'>Update</a> <a href='meetingdelete.php?ID=$ID'>Cancel</a> <a href='meetingpostpone.php?ID=$ID'>Postpone</a></td>";
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
