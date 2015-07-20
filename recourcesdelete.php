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
          	<h2>Recources Delete</h2>
	<div class="clr"></div>
        </div>
        
        <div class="meeting">  

<?php
	$rowtype=$_GET['Type'];
	$rowid=$_GET['ID'];
//	echo $rowtype."<br />";
//	echo $rowid;
	include('conn.php');
	mysql_query("SET NAMES 'utf8'");
//	mysql_query("SET Locations 'utf8'");

			switch($rowtype)
			{
				case antibodies:
					$result = mysql_query("SELECT * FROM antibodies where An_Id=$rowid");

					while($row = mysql_fetch_array($result))
					  {
					  	  $rowNama=$row['Name'];
					  	  $rowSpecies=$row['Species'];
					  	  $rowLocation=$row['Location'];
					  	  $rowCompany=$row['Company'] ;
					  	  $rowProduct=$row['Product'];
					  	  $rowWebsite=$row['Website'];
					  	  
						echo "
						<table broder='0'>
						<form action='recourcesdeleteop.php' method='POST'>
						<input type='hidden' name='rowtype' value='antibodies' />
 						<input type='hidden' name='rowid' value='$rowid' />
						<tr id='special'>
						<td id='special'><span>Name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowNama' disabled='disabled'  size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Species:</span></td>
						<td id='special'><input type='text' name='Species' disabled='disabled'  value='$rowSpecies'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location</span></td>
						<td id='special'><input type='text' name='Location' disabled='disabled'  value='$rowLocation'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Company:</span></td>
						<td id='special'><input type='text' name='Company' disabled='disabled'  value='$rowCompany'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Product #:</span></td>
						<td id='special'><input type='text' name='Product'  disabled='disabled'  value='$rowProduct'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Website:</span></td>
						<td id='special'><input type='text' name='Website' value='$rowWebsite'  disabled='disabled' size='80' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Delete' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form></table>
						";
					  }
					break;
					
				case vectors:
					$result = mysql_query("SELECT * FROM vectors where Vec_Id=$rowid");

					while($row = mysql_fetch_array($result))
					  {
					  	  $rowNama=$row['Name'];
					  	  $rowSource=$row['Source'];
					  	  $rowSequence=$row['Sequence'];
					  	  $rowLocation=$row['Location'] ;
					  	  $rowLink=$row['Link'];
					  	  
						echo "
						<table broder='0'>
						<form action='recourcesdeleteop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$rowtype' />
 						<input type='hidden' name='rowid' value='$rowid' />
						<tr id='special'>
						<td id='special'><span>Name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowNama' disabled='disabled'  size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Source:</span></td>
						<td id='special'><input type='text' name='Source' value='$rowSource' disabled='disabled'  size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Sequence</span></td>
						<td id='special'><input type='text' name='Sequence' value='$rowSequence'  disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location:</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation'  disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Link:</span></td>
						<td id='special'><input type='text' name='Link' value='$rowLink' size='80' disabled='disabled'  /></td>
						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Delete' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>	
						";
					  }
					break;
		
				case chemical: 
					$result = mysql_query("SELECT * FROM chemical where Ch_Id=$rowid");
					while($row = mysql_fetch_array($result))
					  {
					  	  $rowName=$row['Name'];
					  	  $rowNumber=$row['Number'];
					   	  $rowLocation=$row['Location'];

						echo "
						<table broder='0'>
						
						<form action='recourcesdeleteop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$rowtype' />
 						<input type='hidden' name='rowid' value='$rowid' />
						<tr id='special'>
						<td id='special'><span>Name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowName' disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Number:</span></td>
						<td id='special'><input type='text' name='Number' value='$rowNumber'  disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location:</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation' disabled='disabled'  size='50' /></td>

						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Delete' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>
						";

					  }
					break;
					
				case SILAC:
					$result = mysql_query("SELECT * FROM SILAC where Si_Id=$rowid");
					while($row = mysql_fetch_array($result))
					  {
					  	  $rowName=$row['Name'];
					  	  $rowOrganism=$row['Organism'];
					  	  $rowTissue=$row['Tissue'];
					  	  $rowType=$row['Type'];
					  	  $rowKeeper=$row['Keeper'];
					  	  $rowLocation=$row['Location'];
						echo "
						<table broder='0'>
						<form action='recourcesdeleteop.php' method='POST'>
						<input type='hidden' name='rowtype' value='$rowtype' />
 						<input type='hidden' name='rowid' value='$rowid' />
						<tr id='special'>
						<td id='special'><span>Cell name:</span></td>
						<td id='special'><input type='text' name='Name' value='$rowName' disabled='disabled'  size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Organism:</span></td>
						<td id='special'><input type='text' name='Organism' value='$rowOrganism' disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Tissue:</span></td>
						<td id='special'><input type='text' name='Tissue' value='$rowTissue' disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Cell Type/ morphology:</span></td>
						<td id='special'><input type='text' name='Type' value='$rowType' disabled='disabled'  size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Keeper:</span></td>
						<td id='special'><input type='text' name='Keeper' value='$rowKeeper' disabled='disabled'  size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><span>Location:</span></td>
						<td id='special'><input type='text' name='Location' value='$rowLocation'  disabled='disabled' size='50' /></td>
						</tr>
						<tr id='special'>
						<td id='special'><input type='submit' name='submit' value='Delete' /></td>
						<td id='special'><a href='recourcesadmin.php'><input type='button' name='cancel' value='Back'></a></td>
						</tr>
						</form>
						</table>
						";

					  }

				
			
					break;
				
					
			}			
			

			mysql_close($con);
	?>
		
        </div>
       
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
