
<html>
<head>
<title>Welcome to Figeys' Lab</title>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />	
<link href="../style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="gallerystyle.css" />

<link rel="stylesheet" href="svwp_style.css" type="text/css" media="screen" /> 
<script type="text/javascript">

</script>

<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['Id_User'])){
	header("Location:../personal.php");
	exit();
}

include('../conn.php');
  $userid = $_SESSION['Id_User'];
  $name = $_SESSION['username'];

//echo $name;

?>



</head>
<body>



<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="../index.php"><span>Figeys' Lab</span></a> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../workshop.html">Resources</a></li>
          <li><a href="../personal.php">My Lab</a></li>
          <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li class="active"><a href="../gallery.php">Gallery</a></li> 
          <li><a href='../personal.php?action=logout'>Log Out</a> </li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h3>>>><a href='imgpost.php?status=3'>Post a picture</a></h3>
          <div class="clr"></div>
	         <div class="login">
			<div id="basic" class="svwp">
	<ul id="slideshow">
<?php
			include('../conn.php');
			$result = mysql_query("select * from gallery order by ID DESC");
			while($row = mysql_fetch_array($result))
			{	
				$id=$row['ID'];
				$Title=$row['Title'];
				$Description=$row['Description'];
				$Datetimes=$row['DateTime'];
				$url="photos/".$id.".jpg";
				$thumburl="thumbnails/".$id."-thumb.jpg";
				echo"<li>
						<h3><a href='$url' target='_blank'>$Title</a></h3>
						<span>$url</span>
						<p>$Description <a href='imgcomment.php?id=$id'>Comment</a> </p>
						<img src='$thumburl' alt='$Title' />
					</li>";
			}
			echo "	</ul>";
		    mysql_close($con);


?>

	<div id="wrapper">
		<div id="fullsize">
			<div id="imgprev" class="imgnav" title="Previous Image"></div>
			<div id="imglink"></div>
			<div id="imgnext" class="imgnav" title="Next Image"></div>
			<div id="image"></div>
			<div id="information">
				<h3></h3>
				<p></p>
			</div>
		</div>
		<div id="thumbnails">
			<div id="slideleft" title="Slide Left"></div>
			<div id="slidearea">
				<div id="slider"></div>
			</div>
			<div id="slideright" title="Slide Right"></div>
		</div>
	</div>
			<br />
			<br />
			<br />
			

<script type="text/javascript" src="compressed.js"></script>
<script type="text/javascript">
	$('slideshow').style.display='none';
	$('wrapper').style.display='block';
	var slideshow=new TINY.slideshow("slideshow");
	window.onload=function(){
		slideshow.auto=true;
		slideshow.speed=5;
		slideshow.link="linkhover";
		slideshow.info="information";
		slideshow.thumbs="slider";
		slideshow.left="slideleft";
		slideshow.right="slideright";
		slideshow.scrollSpeed=4;
		slideshow.spacing=5;
		slideshow.active="#fff";
		slideshow.init("slideshow","image","imgprev","imgnext","imglink");
	}
</script>

			</div>
			<br />
			<br />
	        </div>
         </div>
      </div>
	        <div class="clr"></div><br /><br />

    </div>
  </div>

  <div class="fbg">
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright © <a href="#">2014 OISB</a>. All rights reserved.</p>
      <ul class="fmenu">
          <li><a href="../index.php">Home</a></li>
          <li><a href="../workshop.html">Resources</a></li>
          <li><a href="../personal.php">My Lab</a></li>
          <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li class="active"><a href="../gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
