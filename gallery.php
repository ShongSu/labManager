<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head>
<title>Welcome to Figeys' Lab</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<?php
error_reporting(0);
session_start();


include('conn.php');
  $userid = $_SESSION['Id_User'];
  $name = $_SESSION['username'];

//echo $name;

?>	
<?php
		function getImg()
		{
			include('conn.php');
			$result = mysql_query("select * from gallery order by ID DESC limit 5");
			while($row = mysql_fetch_array($result))
			{
					  $postName=$row['Name'];
					  $id=$row['ID'];
					  $imgUrl='gallery/photos/'.$row['url'];
					  echo "<fieldset style='width:100%'>";
					  echo  "<legend style='font-size:14px;'><strong>".$postName."</strong> (".$row['DateTime'].") ".$row['Title']."</legend ><span style='font-size:14px'></span>";
					  echo "<br />"	;
					if(!isset($_SESSION['Id_User'])){	
					  	echo "<a style='margin-left:15px' href='personal.php?status=4&id=$id'><img width='92%' src='$imgUrl' /> </a>";
					    }
					  else{
					  	  echo "<a style='margin-left:15px'  href='gallery/imgcomment.php?id=$id'><img width='92%' src='$imgUrl' /> </a>";
					  }
			//		  echo "<br />";
					  echo "<p style='color:sienna;margin-left:25px;font-size:12px'>".$row['Comment']."</p>";
					  echo "<p>";
					  echo "</fieldset>";
					  echo "<br />";


			}
			mysql_close($con);
		}
		
		



?>

<!-- CuFon ends -->
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
          <?php
          	if(!isset($_SESSION['Id_User'])){	
			echo " <li><a href='personal.php'>Log In</a></li>";
					    }
			else{
			echo " <li><a href='personal.php'>My Lab</a></li>";
					  }
		?>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
           <li  class="active"><a href="gallery.php">Gallery</a></li>
          <?php
          	if(!isset($_SESSION['Id_User'])){	
					    }
			else{
			echo "  <li><a href='personal.php?action=logout'>Log Out</a> </li>";
					  }
		?>
    </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
      <div class="article">

	<br />
	  <h3>>>><a href='gallery/imgpost.php?status=3'>Post a picture </a>>>><a href="gallery/allgallery.php">View the whole gallery</a></h3>
<h3>>>>Click the picture to comment</h3>  
	  <p><span class="date"></span><?php getImg()?></p>
 	 </fieldset>
  	</div>
  		
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Navigation</h2><div class="clr"></div>
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

      <div class="clr">	
      </div>
    </div>
  </div>
<
  <div class="fbg">
  </div>
  <div class="footer">
    <div class="footer_resize">
      
      <p class="lf">
      	  Copyright © <a href="#">2014 OISB</a>. All rights reserved. 
</p>
      <ul class="fmenu">
          <li ><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li class="active"> <a href="gallery.php">Gallery</a></li>

      </ul>
      <div class="clr"></div>
    </div>
  </div>  
</div>
</body>
</html>
