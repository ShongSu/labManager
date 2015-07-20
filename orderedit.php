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
          	<h2>Order List</h2>
	<div class="clr"></div>
        </div>
        
        <div class="meeting">  
 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
	
<?php
	$rowid=$_GET['rowid'];
	include('conn.php');
	$result = mysql_query("SELECT * FROM product where md5(ID)='$rowid'");
	
	while($row = mysql_fetch_array($result))
	{
			  $rowOwner=$row['Owner'];
			  $rowName=$row['Name'];
			  $rowCatalogue=$row['Catalogue'];
		        $rowCompany=$row['Company'];
			  $rowLink=$row['Link'];
			  $rowDate= $row['Date'] ;
			  $rowProject=$row['Project'];
			  $rowStatus=$row['Status'] ;
			  $rowStamp=$row['Stamp'] ;
			  $rowRemark=$row['Remark'] ;
			  $rowComment=$row['Comment'] ;
			  $currentDate=date('Y-m-d');
			  $currentTime=date('H:i');

	echo "
	<table broder='0'>
	<tr id='special'>	
	<form action='ordereditop.php' method='POST'>
	<input type='hidden' name='rowid' value='$rowid' />
	<td id='special'><span>Applicant:</span></td>
	<td id='special'><input type='text' name='Owner' value='$rowOwner' size='50'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Product Name:</span></td>
	<td id='special'><input type='text' name='Name' value='$rowName' size='50' disabled='disabled'  /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Date</span></td>
	<td id='special'><input type='text' name='Date' value='$rowDate' size='50' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Project:</span></td>
	<td id='special'><input type='text' name='Project' value='$rowProject' size='50' disabled='disabled' /></td>
	</tr>

	<tr id='special'>	
	<td id='special'><span>Catalogue:</span></td>
	<td id='special'><input type='text' name='Catalogue' value='$rowCatalogue' size='50' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Company</span></td>
	<td id='special'><input type='text' name='Company' value='$rowCompany' size='50' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Link</span></td>
	<td id='special'><input type='text' name='Link' value='$rowLink'  size='50' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Remark:</span></td>
	<td id='special'><textarea name='Remark' rows='5' cols='40' disabled='disabled'>$rowRemark</textarea></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Comment:</span></td>
	<td id='special'><textarea name='Comment' rows='5' cols='40'>$rowComment</textarea></td>
	</tr>

	<tr id='special'>	
	<td id='special'><span>Status:</span></td>
	<td id='special'><select name='Status'>
	<option value='$rowStatus'>$rowStatus</option>
		<option value='Setup'>Setup</option>
		<option value='Ordered'>Ordered</option>
		<option value='ETA/Backordered'>ETA/Backordered</option>
		<option value='Received'>Received</option>
	</select>
	<input type='date' name='spDate' value='$currentDate' />
	<input type='time' name='spTime' value='$currentTime' /></td>

	</tr>
	<tr id='special'>	
	<td id='special'><input type='submit' name='submit' value='Update' /></td>
	<td id='special'><a href='msadmin.php'><input type='button' name='cancel' value='Back' /></a></td>
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
      	</div>

		
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
