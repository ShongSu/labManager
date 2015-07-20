
<html>
<head>
<title>Human Resources Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Human=1");
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
      <div class="logo"><h1><a href="index.php"><span>Figeys' Lab</span> </a><a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
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
          <h2><span>User Management</span></h2><div class="clr"></div>
            <a href='newuser.php'>New User</a> | <a href='personal.php'>Back</a>
     		<p class="meeting"> 	
     	<div id="Content_Meeting">
		<?php search(); ?>
		</div>

	<?php
		function search()
		{
			include('conn.php');

			$result = mysql_query("select * from users order by Name");
	
			echo "<table border='1' style='border-collapse: collapse' cellpadding='7'>
			<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Gender</th>
			<th>E-mail</th>
			<th>ME</th>
			<th>RE</th>
			<th>MS</th>
			<th>RP</th>
			<th>FR</th>
			<th>HU</th>
			<th>TA</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  $id=$row['Id_User'];
			  echo "<td><a href='humanedit.php?id=$id'>" . $row['Id_User'] . "</a></td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gender'] . "</td>";
			  echo "<td>" . $row['Email'] . "</td>";
			  echo "<td>" . $row['Meeting'] . "</td>";
			  echo "<td>" . $row['Recources'] . "</td>";
			  echo "<td>" . $row['MS'] . "</td>";
			  echo "<td>" . $row['Report'] . "</td>";
			  echo "<td>" . $row['Fridge'] . "</td>";
			  echo "<td>" . $row['Human'] . "</td>";
			  echo "<td>" . $row['Task'] . "</td>";
		//	  $ID=$row['Id_M'];
		//	  echo "<td> <a href='meetingupdate.php?ID=$ID'>Update</a> <a href='meetingdelete.php?ID=$ID'>Cancel</a> <a href='meetingpostpone.php?ID=$ID'>Postpone</a></td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
		}
	?>
	<p><strong>Note:</strong><br />
	ME: Meeting, RE: Recources, MS: MS Application, RP: Report, FR: Fridge, HU: Human, <br />TA: Task.

	</p>

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
