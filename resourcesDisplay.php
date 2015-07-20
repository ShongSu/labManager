<html>
<head>
<title>Lab Resources</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<?php
	function search()
	{
	$resourceType=$_POST['resourceType'];
	$inquireMethod=$_POST['inquireMethod'];
	$searchText=$_POST['searchText'];
	
	echo $resourceType. " searched by ".$inquireMethod." including \"".$searchText."\"<br />" ;
	echo "<a href='resources.php'>Start New Search</a>";
	
	
	
			include('conn.php');
			mysql_query("SET NAMES 'utf8'");

			$result = mysql_query("SELECT * FROM $resourceType where $inquireMethod like '%". $searchText . "%' order by $inquireMethod");
	
			switch($resourceType)
			{
				case Antibodies:
					echo "<table id='schedule'>
						<tr>
						<th>Name</th>
						<th>Species</th>
						<th>Location</th>
						<th>Company</th>
						<th>Product #</th>
						<th>Website</th>
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
					  echo "<td><a href='$web' target='_blank'> Link</a></td>";
					  echo "</tr>";
					  }
					echo "</table>";
					break;
					
				case Vectors:
					echo "<table id='schedule'>
							<tr>
							<th>Vector name</th>
							<th>Source</th>
							<th>Vector Sequence (A/NA)</th>
							<th>Location</th>
							<th>Link</th>
							</tr>";

					while($row = mysql_fetch_array($result))
					  {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['Source'] . "</td>";
					  echo "<td>" . $row['Sequence'] . "</td>";
					  echo "<td>" . $row['Location'] . "</td>";
					  $links=$row['Link'];
					  echo "<td><a href='$links' target='_blank'>Link</a></td>";

					  echo "</tr>";
					  }
					echo "</table>";
					break;
				case Chemical: 
					echo "<table id='schedule'>
							<tr>
							<th>Product Name</th>
							<th>Product Number</th>
							<th>Location</th>
							</tr>";

					while($row = mysql_fetch_array($result))
					  {
					  echo "<tr>";
					  echo "<td>" . $row['Name'] . "</td>";
					  echo "<td>" . $row['Number'] . "</td>";
					  echo "<td>" . $row['Location'] . "</td>";
					  echo "</tr>";
					  }
					echo "</table>";
					break;
					
				case SILAC:
					echo "<table id='schedule'>
					<tr>
					<th>Cell name</th>
					<th>Organism</th>
					<th>Tissue</th>
					<th>Cell Type/ morphology</th>
					<th>Keeper</th>
					<th>Location</th>
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
					  echo "</tr>";
					  }
					echo "</table>";
					break;
				
					
			}			
			

			mysql_close($con);
	}
	?>



<!-- CuFon ends -->
</head>
<body >
<?php
	error_reporting(E_ALL & ~E_NOTICE);
?>

<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><span>Figeys' Lab</span> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>

      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
 
      <div class="mainbar">
        <div class="article">
          <h2>Lab Resources</h2><div class="clr"></div> 
  	      </div><div class="meeting">
		<?php search(); ?>
     	  
    	  </div>
</div>

      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="meeting.php"><strong>Lab Meeting</strong></a></li>
            <li><a href="resources.php"><strong>Lab Resources</strong></a></li>
            <li><a href="fridge.php"><strong>Freezer and Fridge</strong></a></li>
            <li><a href="msstatus.php"><strong>MS Utility Status</strong></a></li>

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
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
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



