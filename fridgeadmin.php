
<html>
<head>
<title>Freezer and Fridge Management</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/tab.js"></script>

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

$power = mysql_query("select * from users where Name='$name' and Fridge=1");
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
          <h2><span> Freezer and Fridge Management</span></h2><div class="clr"></div>
     		<p class="meeting"> 

<div class="wrap">
    <ul id="tag">
      <li class="current" >-80 1</li>
      <li>-80 2</li>
      <li>4C</li>
      <li>-20_upright-Hallway</li>
      <li>-20-upright_Speevac Room</li>
      <li>-20-chest</li>
      <li>Liquid nitrogen tank</li>
   </ul>
   <div id="tagContent">
 <!------------------------Table 1------------------------>
     <div> 
      	<br />
              	<h3>Bottom -80 Freezer (Figeys Lab)</h3>
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='801' and Position='top' ");
			
			echo "<table id='myTable'> 
				<caption>Top Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>".  "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>".  "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>".  "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>".  "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
    			  
		  <br />
		  	  
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='801' and Position='bottom' ");
			
			echo "<table id='myTable'> 
				<caption>Bottom Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
 

     <br />
     </div> 
 <!------------------------Table 2------------------------>    
    	<div> 
    		<br />
    		<h3>Bottom -80 Freezer (Figeys Lab)</h3>
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='802' and Position='top' ");
			
			echo "<table id='myTable'> 
				<caption>Top Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] . " " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] . " " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] . " " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] . " " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
    			  
		  <br />
		  	  
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='802' and Position='bottom' ");
			
			echo "<table id='myTable'> 
				<caption>Bottom Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
 
	<br /> 
	</div>
<!------------------------Table 3------------------------>
     <div> 
       	<br />
        	<h3>4C</h3>
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='4C' and Position='top' ");
			
			echo "<table id='myTable'> 
				<caption>Top Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
    			  
		  <br />
		  	  
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='4C' and Position='bottom' ");
			
			echo "<table id='myTable'> 
				<caption>Bottom Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
 

     <br />
     </div> 
<!------------------------Table 4------------------------>
      <div> 
      	<br />
    		<h3>Freezer -20 Hallway (Hallway)</h3>
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='20Hallway' and Position='bottom' ");
			
			echo "<table id='myTable'> 
				<caption>Bottom Shelf</caption> 
				<tr>  
				<th>Shelf 1</th>  
				<th>Shelf 2</th>  
				<th>Shelf 3</th>  
				<th>Shelf 4</th> 
				<th>Bottom freezer</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
  			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>

	<br /> 
      </div>
<!------------------------Table 5------------------------>
       <div>
       	<br />
    		<h3>Freezer -20 Hallway (Hallway)</h3>
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='20Speevac' and Position='bottom' ");
			echo "<table id='myTable'> 
				<caption>Bottom Shelf</caption> 
				<tr>  
				<th>Shelf 1</th>  
				<th>Shelf 2</th>  
				<th>Shelf 3</th>  
				<th>Shelf 4</th> 
				<th>Bottom freezer</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
 	   		 $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>

	<br /> 
       </div>
<!------------------------Table 6------------------------>
      <div> 
       	<br />
        	<h3>-20 Chest</h3>
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='20Chest' and Position='top' ");
			
			echo "<table id='myTable'> 
				<caption>Top Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
    			  
		  <br />
		  	  
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='20Chest' and Position='bottom' ");
			
			echo "<table id='myTable'> 
				<caption>Bottom Shelf</caption> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				<th>Rack 5</th> 		
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
 

     <br />
     </div> 
                	 <!------------------------Table 7------------------------>
     <div> 
      	<br />
              	<h3>Liquid nitrogen tank</h3>
         <br />
    		<?php
    			include('conn.php');
			$result = mysql_query("SELECT * FROM fridge where Type='tank' and Position='top' ");
			
			echo "<table id='myTable'> 
				<tr>  
				<th>Rack 1</th>  
				<th>Rack 2</th>  
				<th>Rack 3</th>  
				<th>Rack 4</th> 
				</tr> ";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr class='alt'> ";
			  $rowid=$row['F_Id']; 
			  echo "<td>" . $row['Grid1'] ." " ."<a href='fridgeedit.php?id=$rowid&list=1'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid2'] ." " ."<a href='fridgeedit.php?id=$rowid&list=2'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid3'] ." " ."<a href='fridgeedit.php?id=$rowid&list=3'>Edit</a>". "</td>";
			  echo "<td>" . $row['Grid4'] ." " ."<a href='fridgeedit.php?id=$rowid&list=4'>Edit</a>". "</td>";
//			  echo "<td>" . $row['Grid5'] ." " ."<a href='fridgeedit.php?id=$rowid&list=5'>Edit</a>". "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
    		?>
    			  
		  <br />
	
     <br /> 
 
	  </div>
   </div>
</div>
<br />
<a href="personal.php">Back</a>





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
