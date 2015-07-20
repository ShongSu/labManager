<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Figeys' Lab</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/tab.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>

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
<!--        <div class="searchform">
            <form id="formsearch" name="formsearch" method="post" action="">
            <input name="button_search" src="images/search_btn.gif" class="button_search" type="image" />
            <span><input name="editbox_search" class="editbox_search" id="editbox_search" maxlength="80" value="Search" type="text" /></span>
          </form>
        </div>     --> 
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
        <div class="article">
          	<h2>Recources Insert</h2>
	<div class="clr"></div>
        </div>
        
     		<div class="meeting"> 
	
<?php
	
	$insertname=$_POST['insertname'];
	
	switch($insertname)
	{
		case Antibodies:
						echo "
						<strong>Antibodies:</strong><br />
						<table broder='0'>
						<form action='resourcesinsertop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$insertname' />
						<tr id='special'>
						<td id='special'><span>Name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowNama' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Species:</span></td>
						<td id='special'><input type='text' name='Species' value='$rowSpecies'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Company:</span></td>
						<td id='special'><input type='text' name='Company' value='$rowCompany'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Product #:</span></td>
						<td id='special'><input type='text' name='Product' value='$rowProduct'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Website:</span></td>
						<td id='special'><input type='text' name='Website' value='$rowWebsite' size='80' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Insert' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>
						";

		break;
		case Vectors:
						echo "
						<strong>Vectors:</strong><br />
						<table broder='0'>
						<form action='resourcesinsertop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$insertname' />
						<tr id='special'>
						<td id='special'><span>Name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowNama' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Source:</span></td>
						<td id='special'><input type='text' name='Source' value='$rowSource' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Sequence</span></td>
						<td id='special'><input type='text' name='Sequence' value='$rowSequence' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location:</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Link:</span></td>
						<td id='special'><input type='text' name='Link' value='$rowLink' size='80' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Insert' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>
						";
		break;
		case Chemical:
					
						echo "
						<strong>Chemicals:</strong><br />
						<table broder='0'>

						<form action='resourcesinsertop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$insertname' />
						<tr id='special'>
						<td id='special'><span>Name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowName' size='50' /></td>
						<tr>
						<tr id='special'>
						<td id='special'><span>Number:</span></td>
						<td id='special'><input type='text' name='Number' value='$rowNumber' size='50' /></td>
						<tr>
						<tr id='special'>
						<td id='special'><span>Location:</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation' size='50' /></td>
						<tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Insert' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>
						";

		break;
		case SILAC:
						echo "
						<strong>SILAC:</strong><br />
						<table broder='0'>
						<form action='resourcesinsertop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$insertname' />
						<tr id='special'>
						<td id='special'><span>Cell name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowName' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Organism:</span></td>
						<td id='special'><input type='text' name='Organism' value='$rowOrganism' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Tissue:</span></td>
						<td id='special'><input type='text' name='Tissue' value='$rowTissue' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Cell Type/ morphology:</span></td>
						<td id='special'><input type='text' name='Type' value='$rowType' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Keeper:</span></td>
						<td id='special'><input type='text' name='Keeper' value='$rowKeeper' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location:</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Insert' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>
						";
		break;
	}




?>

	


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
