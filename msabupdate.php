
<html>
<head>
<title>MS Management</title>
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

$power = mysql_query("select * from users where Name='$name' and MS=1");
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
          <h2><span>Update</span></h2><div class="clr"></div>
     		<p class="meeting"> 
	
<?php
	$ID=$_GET['ID'];
	include('conn.php');
	$result = mysql_query("select * from MS where ID = $ID");
	
	while($row = mysql_fetch_array($result))
	{
	$rowName=$row['Name'];
	$rowStatus=$row['Status'];
	$rowComment=$row['Comment'];


	echo "
	<table broder='0'>
	<tr id='special'>
	<form action='msabupdateop.php' method='POST'>
	<input type='hidden' name='ID' value='$ID' />
	<td id='special'><span>Equipment:</span></td>
	<td id='special'><input type='text' name='Name' value='$rowName' disabled='disabled' /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Status:</span></td>
	<td id='special'>
		<select name='Status'>
		<option value='$rowStatus'>$rowStatus</option>
		<option value='Running'>Running</option>
		<option value='Available'>Available</option>
		<option value='Maintaining'>Maintaining</option>
		<option value='Down'>Down</option>
	</select></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Comment:</span></td>
	<td id='special'><textarea name='Comment' rows='4' cols='30' >$rowComment</textarea></td>
	</tr>
	<tr id='special'>
	<td id='special'><input type='submit' name='submit' value='Update' /></td>
	<td id='special'><a href='msabadmin.php'><input type='button' name='cancel' value='Back'></a></td>
	</tr>
	</form>
	</table>	
	";
			
	}		


	mysql_close($con);
	
	
	
	?>



	
	</p>          
	</div>
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
