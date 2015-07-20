
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
          <h2><span>My Application</span></h2><div class="clr"></div>
     		<p class="meeting"> 	
     	<div id="Content_Meeting">
		<?php search(); ?>
		</div>

	<?php
		function search()
		{
			include('conn.php');
			$name=$_SESSION['username'];
			$result = mysql_query("select * from product Where Owner='$name' order by Date DESC");
			while($row = mysql_fetch_array($result))
			  {
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


			  echo "
			<fieldset style='width:90%'>
	  
			  <legend>$rowName, $rowDate</legend> 
			  <dl>
			  <dt><strong>Catalogue:</strong> $rowCatalogue || <strong>Company:</strong> $rowCompany || <strong>Project:</strong> $rowProject</dt>
			  <dt><strong>Link:</strong> $rowLink</dt>
			  <dt><strong>Status:</strong> $rowStatus || <strong>Time:</strong> $rowStamp  </dt> 
			  <dt><strong>Remark:</strong> $rowRemark</dt> 
			  <dt><strong>Comment:</strong> $rowComment</dt> 

			  </dl>
			 </fieldset>'";

			  	  
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
