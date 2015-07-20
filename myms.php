
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
	header("Location:personal.html");
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
		<li><a href='personal.php?action=logout'>Log Out</a> </li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>My MS</span></h2><div class="clr"></div>
	         <div class="login">



<div>
<p><strong>Hi

<?php echo $name ;
	echo ': <br />';  ?>
 </strong>
</p>
<p>Please update the satus if you found your analysis finished. You can also cancel your bookings as well. </P>
<?php
			$result = mysql_query("select * from msstatus where Name='$name' and Finished='Analyzing'");
			
 			 	echo "<fieldset style='width:96%'>";
				echo  "<legend style='font-size:14px;'>".Analyzing."</legend>";
			        echo "<label style='width:80px;display:inline-block;'><strong>Start Time: </strong></label>";
				  echo "<label style='width:60px;display:inline-block;'><strong>Samples: </strong></label>";
				  echo "<label style='width:60px;display:inline-block;'><strong>Gradient: </strong></label>";
				  echo "<label style='width:130px;display:inline-block;'><strong>Equipment: </strong></label>";
	
				  echo "<br />";

	 		while($row = mysql_fetch_array($result))
			  {
			        $rowid=md5($row['MS_ID']);
				  echo "<label style='width:80px;display:inline-block;'>".date('Y-m-d',strtotime($row['StartTime']))."</label>";
				  echo "<label style='width:60px;display:inline-block;'>".$row['Examples']."</label>";
				  echo "<label style='width:60px;display:inline-block;'>".$row['Gradient']."</label>";
				  echo "<label style='width:130px;display:inline-block;'>".$row['Equipment']."</label>";
				  echo "<label style='width:30px;display:inline-block;'><a href='msfinish.php?id=$rowid'>Update the Stauts</a></label>";
				  echo "<br />";
			}
				echo "</fieldset>";

?>				


<br />

<?php
			$result = mysql_query("select * from msstatus where Name='$name' and Finished='Waiting'");
			
 			 	echo "<fieldset style='width:96%'>";
				echo  "<legend style='font-size:14px;'>".Waiting."</legend>";
			        echo "<label style='width:70px;display:inline-block;'><strong>Applied At</strong></label>";
				  echo "<label style='width:50px;display:inline-block;'><strong>Samples</strong></label>";
				  echo "<label style='width:50px;display:inline-block;'><strong>Gradient</strong></label>";
				  echo "<label style='width:100px;display:inline-block;'><strong>Equipment</strong></label>";
				  echo "<label style='width:130px;display:inline-block;'><strong>Bookings Before Me</strong></label>";
				  echo "<br />";

	 		while($row = mysql_fetch_array($result))
			  {
			        $applytime=$row['Time_K'];
			        $Equipment=$row['Equipment'];
				  $counts="select count(*) as num from msstatus where Equipment='$Equipment' and Finished='Waiting' and Time_K<='$applytime'";
			        $res=mysql_query($counts);
			        if ($res){    
			        	$listrow=mysql_fetch_array($res);
			        	$lists=$listrow['num'];
			        	}
			        $rowid=md5($row['MS_ID']);
				  echo "<label style='width:70px;display:inline-block;'>".date('Y-m-d',strtotime($row['Time_K']))."</label>";
				  echo "<label style='width:50px;display:inline-block;'>".$row['Examples']."</label>";
				  echo "<label style='width:50px;display:inline-block;'>".$row['Gradient']."</label>";
				  echo "<label style='width:150px;display:inline-block;'>".$row['Equipment']."</label>";
				  echo "<label style='width:80px;display:inline-block;'>".$lists."</label>";
			         echo "<label style='width:80px;display:inline-block;'><a href='mscancelop.php?id=$rowid'>Cancel This</a></label>";
			         echo "<br />";
			}
				echo "</fieldset>";

			mysql_close($con);
?>				


</div>


	<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
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
