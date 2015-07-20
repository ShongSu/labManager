
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
          <h2><span>My Contact</span></h2><div class="clr"></div>
     		<p class="meeting"> 	
     	<div id="Content_Meeting">
		<?php search(); ?>
		</div>

	<?php
		function search()
		{
			include('conn.php');
			$name=$_SESSION['username'];
			$result = mysql_query("select * from users Where Name='$name' limit 1");
			while($row = mysql_fetch_array($result))
			  {
			  $rowName=$row['Name'];
			  $rowEmail=$row['Email'];
		        $rowPhone=$row['Phone'];
			  $rowExtention=$row['Extention'];
			  $rowRoom= $row['Room'] ;
			  $rowBirthday=$row['Birthday'];
			  $rowDisplay=$row['Display'] ;


			  echo "
			<table broder='0'>
			<form action='mycontactop.php' method='POST'>
 			<input type='hidden' name='rowid' value='$rowid' />

    			<tr id='special'>
			<td id='special'><span>Name:</span></td>
			<td id='special'><input type='text' name='Name' value='$rowName' size='30' disabled='disabled' /></td>
			</tr>

			<tr id='special'>
			<td id='special'><span>Email:</span></td>
			<td id='special'><input type='text' name='Email' value='$rowEmail' size='40' /></td>
			</tr>

			<tr id='special'>
			<td id='special'><span>Cell Phone:</span></td>
			<td id='special'><input type='text' name='Phone' value='$rowPhone' size='15' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Extention:</span></td>
			<td id='special'><input type='text' name='Extention' value='$rowExtention' size='15' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Room:</span></td>
			<td id='special'><input type='text' name='Room' value='$rowRoom' size='15' /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Birthday:</span></td>
			<td id='special'><input type='date' name='Birthday' value='$rowBirthday'  /></td>
			</tr>
			<tr id='special'>
			<td id='special'><span>Display:</span></td>
			<td id='special'><input type='text' name='Display' value='$rowDisplay' size='1' /></td>
			</tr>
	
			<tr id='special'>
			<td id='special'><input type='submit' name='submit' value='Update' /></td>
			<td id='special'><a href='personal.php'><input type='button' name='cancel' value='Back'></a></td>
			</tr>
			</form></table>";
			}


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
