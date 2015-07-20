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
          	<h2>Recources Management</h2>
	<div class="clr"></div>
        </div>
        
        <div class="meeting">  

<?php
	function search()
	{
	$resourceType=$_POST['resourceType'];
	$inquireMethod=$_POST['inquireMethod'];
	$searchText=$_POST['searchText'];
	
	echo $resourceType. " searched by ".$inquireMethod." including \"".$searchText."\" <a href='recourcesadmin.php'>Back</a><br />" ;
	
	
	
			include('conn.php');
			mysql_query("SET NAMES 'utf8'");

			$result = mysql_query("SELECT * FROM $resourceType where $inquireMethod like '%". $searchText . "%' order by $inquireMethod");
	
			switch($resourceType)
			{
				case Antibodies:
						echo "<table border='1' style='border-collapse: collapse' cellpadding='4' width='80%'>
						<tr>
						<th>Name</th>
						<th>Species</th>
						<th>Location</th>
						<th>Company</th>
						<th>Product #</th>
						<th>Website</th>
						<th>Operation</th>
						</tr>";

					while($row = mysql_fetch_array($result))
					  {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['Species'] . "</td>";
					  echo "<td>" . $row['Location'] . "</td>";
					  echo "<td>" . $row['Company'] . "</td>";
					  echo "<td>" . $row['Product'] . "</td>";
					  $web=$row['Website'];
					  $rowid=$row['An_Id'];
					  echo "<td><a href='$web' target='_blank'> Website </a></td>";
		  			  echo "<td> <a href='recourcesupdate.php?Type=antibodies&ID=$rowid'>Update</a> <a href='recourcesdelete.php?Type=antibodies&ID=$rowid'>Delete</a></td>";
					  echo "</tr>";
					  }
					echo "</table>";
					break;
					
				case Vectors:
						echo "<table border='1' style='border-collapse: collapse' cellpadding='4' width='80%'>
							<tr>
							<th>Vector name</th>
							<th>Source</th>
							<th>Vector Sequence (A/NA)</th>
							<th>Location</th>
							<th>Link</th>
							<th>Operation</th>
							</tr>";

					while($row = mysql_fetch_array($result))
					  {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['Source'] . "</td>";
					  echo "<td>" . $row['Sequence'] . "</td>";
					  echo "<td>" . $row['Location'] . "</td>";
					  $links=$row['Link'];
					  $rowid=$row['Vec_Id'] ;
					  echo "<td><a href='$links' target='_blank'> Link </a></td>";
		  			  echo "<td> <a href='recourcesupdate.php?Type=vectors&ID=$rowid'>Update</a> <a href='recourcesdelete.php?Type=vectors&ID=$rowid'>Delete</a></td>";
					  echo "</tr>";
					  }
					echo "</table>";
					break;
				case Chemical: 
						echo "<table border='1' style='border-collapse: collapse' cellpadding='4' width='80%'>
							<tr>
							<th>Product Name</th>
							<th>Product Number</th>
							<th>Location</th>
							<th>Operation</th>
							</tr>";

					while($row = mysql_fetch_array($result))
					  {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['Number'] . "</td>";
					  echo "<td>" . $row['Location'] . "</td>";
					  $rowid=$row['Ch_Id'] ;
		  			  echo "<td> <a href='recourcesupdate.php?Type=chemical&ID=$rowid'>Update</a> <a href='recourcesdelete.php?Type=chemical&ID=$rowid'>Delete</a></td>";
					  echo "</tr>";
					  }
					echo "</table>";
					break;
					
				case SILAC:
						echo "<table border='1' style='border-collapse: collapse' cellpadding='4' width='80%'>
					<tr>
					<th>Cell name</th>
					<th>Organism</th>
					<th>Tissue</th>
					<th>Cell Type/ morphology</th>
					<th>Keeper</th>
					<th>Location</th>
					<th>Operation</th>
					</tr>";

					while($row = mysql_fetch_array($result))
					  {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['Organism'] . "</td>";
					  echo "<td>" . $row['Tissue'] . "</td>";
					  echo "<td>" . $row['Type'] . "</td>";
					  echo "<td>" . $row['Keeper'] . "</td>";
					  echo "<td>" . $row['Location'] . "</td>";
					  $rowid=$row['Si_Id'] ;
		  			  echo "<td> <a href='recourcesupdate.php?Type=SILAC&ID=$rowid'>Update</a> <a href='recourcesdelete.php?Type=SILAC&ID=$rowid'>Delete</a></td>";

					  echo "</tr>";
					  }
					echo "</table>";
					break;
				
					
			}			
			

			mysql_close($con);
	}
	?>

   		<?php search(); ?>
		
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
