
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
          <h2><span>Human Management</span></h2><div class="clr"></div>
     		<p class="meeting"> 	
     	<div id="Content_Meeting">
		<?php search(); ?>
		</div>

	<?php
		function search()
		{
			include('conn.php');
			$rowid=$_GET['id'];
			$result = mysql_query("select * from users Where Id_User='$rowid' limit 1");
			while($row = mysql_fetch_array($result))
			  {
			  $rowName=$row['Name'];
			  $rowGender=$row['Gender'];
			  $rowEmail=$row['Email'];
			  $rowME=$row['Meeting'];
		        $rowRE=$row['Recources'];
			  $rowMS=$row['MS'];
			  $rowRP= $row['Report'] ;
			  $rowFR=$row['Fridge'];
			  $rowHU=$row['Human'] ;
			  $rowTA=$row['Task'] ;


			  echo "
			<table broder='0'>
			<form action='humaneditop.php' method='POST'>
 			<input type='hidden' name='rowid' value='$rowid' />
 			
			<tr id='special'>
			<td id='special'><span style='font-size:120%'><strong>Basic Information</strong></span></td>
			</tr>
  			<tr id='special'>
			<td id='special'><span>ID:</span></td>
			<td id='special'><input type='text' name='ID' value='$rowid' size='30' disabled='disabled' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Name:</span></td>
			<td id='special'><input type='text' name='Name' value='$rowName' size='30' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Gender:</span></td>
			<td id='special'><input type='text' name='Gender' value='$rowGender' size='30' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Email:</span></td>
			<td id='special'><input type='text' name='Email' value='$rowEmail' size='40' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span style='font-size:120%'><strong>Permissions Management</strong></span></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Meeting:</span></td>
			<td id='special'><input type='text' name='Meeting' value='$rowME' size='1' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Recources:</span></td>
			<td id='special'><input type='text' name='Recources' value='$rowRE' size='1' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>MS:</span></td>
			<td id='special'><input type='text' name='MS' value='$rowMS' size='1' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Report:</span></td>
			<td id='special'><input type='text' name='Report' value='$rowRP' size='1' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Fridge:</span></td>
			<td id='special'><input type='text' name='Fridge' value='$rowFR' size='1' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Human:</span></td>
			<td id='special'><input type='text' name='Human' value='$rowHU' size='1' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Task:</span></td>
			<td id='special'><input type='text' name='Task' value='$rowTA' size='1' /></td>
			</tr>

			<tr id='special'>
			<td id='special'><input type='submit' name='submit' value='Update' /></td>
			<td id='special'><a href='human.php'><input type='button' name='cancel' value='Back'></a></td>
			<td id='special'><a href='userdelop.php?id=$rowid'><input type='button' name='drop' value='Delete this user'></a></td>
			</tr>
			</form></table>";
			}


			mysql_close($con);
		}
	?>
	<p><strong>Note:</strong><br />
	ME: Meeting, RE: Recources, MS: MS Application, RP: Report, FR: Fridge, HU: Human, TA: Task.

	</p>

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
