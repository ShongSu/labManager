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
	function getComingMeet()
	{
		include('conn.php');
		$result = mysql_query("select * from meeting where Date >= (SELECT DATE_FORMAT( NOW( ) ,  '%y-%m-%d' )) order by Date ASC limit 2");
		if($result){
		while($row = mysql_fetch_array($result))
		{
				  echo  $row['Date'].", ".$row['StartTime'].". At ". $row['Venue']. ", by <strong>".$row['WorkPrst']."</strong> and <strong>".$row['JnoPrstWorkshop']."</strong>.<br />";

		}}
		else{
			echo "No meeting scheduled in near future.";
		}
		mysql_close($con);
	}
	
	function getComingDuty()
	{
		include('conn.php');
		$currentweek=date('W');
		$currentyear=date('Y');
		$result = mysql_query("select * from labduty where Year=$currentyear AND Week=$currentweek limit 1");
		if($result){
			while($row = mysql_fetch_array($result))
			{
					  echo  "<h3>Regular Lab Duty:</h3>
					 <strong><font size='2' color='blue'>".$row['AD_Duty']."</font></strong> for Autoclaving Dishes;</br> 
					 <strong><font size='2' color='blue'>".$row['CB_Duty']."</font></strong> for Changing Biohazard bags and dropping off; </br> 
					 <strong><font size='2' color='blue'>".$row['RC_Duty']."</font></strong> for Regular Cleanin; </br> 
					 <strong><font size='2' color='blue'>".$row['PM_Duty']."</font></strong> for pH meter; </br> 
					 <strong><font size='2' color='blue'>".$row['F_Duty']."</font></strong> for -80 Freezer;</br> 
					 <strong><font size='2' color='blue'>".$row['LR_Duty']."</font></strong> for Lab Restocking. ";
			}
		}else{
			echo "No duty scheduled this week.";
		}
		echo "<br />";
		$result2 = mysql_query("select * from tcduty where Year=$currentyear AND Week=$currentweek limit 1");
		if($result2){
		while($row2 = mysql_fetch_array($result2))
		{
				  echo  "<H3>TC Duty:</h3>
				  <strong><font size='2' color='blue'>".$row2['BB_Duty']."</font></strong> for Biohazard bags;</br> 
				  <strong><font size='2' color='blue'>".$row2['SC_Duty']."</font></strong> for Sharps Container;</br> 
				  <strong><font size='2' color='blue'>".$row2['RP_Duty']."</font></strong> for Restocking pipets; </br> 
				  <strong><font size='2' color='blue'>".$row2['DA_Duty']."</font></strong> for Decontamination of Aspirator. ";
		}
		}else{
			echo "No duty scheduled this week.";
		}

		
		mysql_close($con);
	}

	
		function getPost()
		{
			include('conn.php');
			$result = mysql_query("select * from post order by DateTime DESC limit 5");
			while($row = mysql_fetch_array($result))
			{
					  echo "<fieldset style='width:96%'>";
					  echo  "<legend style='font-size:14px;'><strong>".$row['Name'].": ".$row['Title']."</strong> (".$row['DateTime'].")</legend ><span style='font-size:14px'>".$row['Content']."</span>";
					  $id=$row['Id_P'];
				 	if(!isset($_SESSION['Id_User'])){	
					  	echo "<a style='margin-left:15px' href='personal.php?status=1&id=$id'>Login to comment</a>";
					    }
					  else{
					  	  echo "<a style='margin-left:15px'  href='postcomment.php?id=$id'>Comment</a>";
					  }
			//		  echo "<br />";
					  echo "<p style='color:sienna;margin-left:25px;font-size:12px'>".$row['Comment']."</p>";
					  echo "<p>";
					  echo "</fieldset>";
					  echo "<br />";


			}
			mysql_close($con);
		}
		
		
	function getMsstatus()
	{
		include('conn.php');
		$result = mysql_query("SELECT * FROM msstatus where Finished='Analyzing' ");

			while($row = mysql_fetch_array($result))
			  {
			  	  echo "<fieldset style='width:96%'>";
			         echo  "<legend style='font-size:14px;'>".$row['Equipment']."</legend>";

				  echo "<label style='width:130px;display:inline-block;'><strong>Booked </strong></label>";
				  echo "<label style='width:50px;display:inline-block;'><strong>Name </strong></label>";
				  echo "<label style='width:70px;display:inline-block;'><strong>Samples </strong></label>";
				  echo "<label style='width:70px;display:inline-block;'><strong>Gradient </strong></label>";
				  echo "<label style='width:130px;display:inline-block;'><strong>Started </strong></label>";
				  echo "<br />";
				  echo "<label style='width:130px;display:inline-block;'>".$row['Time_K']."</label>";
				  echo "<label style='width:50px;display:inline-block;'>".$row['Name']."</label>";
				  echo "<label style='width:70px;display:inline-block;'>".$row['Examples']."</label>";
				  echo "<label style='width:70px;display:inline-block;'>".$row['Gradient']."</label>";
				  echo "<label style='width:130px;display:inline-block;'>".$row['StartTime']."</label>";
				  
			  	  echo "</fieldset>";
			  	  echo "<br />";
			  }
		
		mysql_close($con);
	}
	
	

	function getGallery()
	{
		include('conn.php');
		$result = mysql_query("SELECT * FROM gallery order by ID desc limit 20");
		while($row = mysql_fetch_array($result))
			  {
			  	  $rowid=$row['ID'];
			  	  $url="gallery/thumbnails/".$rowid."-thumb.jpg";
			//	  echo "<label style='width:600px;display:inline-block;'><strong>".$row['Name']."</strong> just posted a picture ";
				
					if(!isset($_SESSION['Id_User'])){	
					  	echo "<strong><a href='personal.php?status=4&id=$rowid'><img src='$url' /></a></strong> ";
					    }
					  else{
					  	  echo "<strong><a href='gallery/imgcomment.php?id=$rowid'><img src='$url' /></a></strong> ";
					  }
			//	echo " at ".$row['DateTime']."</label> <br />";


			  }
	}
	



	function getMs()
	{
		include('conn.php');
		$result = mysql_query("SELECT * FROM MS");
 			
		 echo "<fieldset style='width:96%'>";
		 echo  "<legend style='font-size:14px;'>MS Status</legend>";

		 echo "<label style='width:140px;display:inline-block;'><strong>Equipment </strong></label>";
		 echo "<label style='width:80px;display:inline-block;'><strong>Status </strong></label>";
		 echo "<label style='width:240px;display:inline-block;'><strong>Comment </strong></label>";
		
		while($row = mysql_fetch_array($result))
			  {
			  	

				
				  echo "<br />";
				  echo "<label style='width:140px;display:inline-block;'>".$row['Name']."</label>";
				  echo "<label style='width:80px;display:inline-block;'>".$row['Status']."</label>";
				  echo "<label style='width:240px;display:inline-block;'>".$row['Comment']."</label>";
	
			  }
		echo "</fieldset>";

		 echo "<br />";
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
          <li class="active"><a href="index.php">Home</a></li>
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
          <li><a href="gallery.php">Gallery</a></li>
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
	<div id="left">
	<br />
      <fieldset style="width:100%">
	  <legend >MS Utilization: <a href="msstatus.php">More</a></legend>   
	  <p><span class="date"></span><?php getMs();getMsstatus()?></p>
 	 </fieldset>
  	<br />
        <fieldset style="width:100%">
	  <legend >Broadcast: <a href='post.php?status=2'>Post</a>/<a href="fullpost.php">More</a></legend>   
	  <p><span class="post"></span><?php getPost()?></p>
 	 </fieldset>
	<br />
  	</div>
  		
      </div>
      	  </div>
      <div class="sidebar">
        <div class="gadget">
          <p></p><div class="clr"></div>
		<div id="right">
        <fieldset style="width:90%">
	  <legend >Upcoming Lab Meeting: <a href="meeting.php">View All</a></legend>   
	  <p><span class="date"></span><?php getComingMeet()?></p>
 	 </fieldset>
	<br />

         <fieldset style="width:90%">
	  <legend>Lab Duty for this week: </legend>   
	  <p><span class="date"></span><?php getComingDuty()?></p>
 	 </fieldset>
	<br />
	 		 
       <fieldset style="width:90%">
	  <legend >Newly Uploaded: <a href="gallery/allgallery.php" target="_self">View All</a></legend>   
	  <p><span class="date"></span><?php getGallery()?></p>
 	 </fieldset>

        </div>
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
      	<?php $lastmod =date("F d, Y h:ia", getlastmod());
					echo "Page last modified on $lastmod"; ?><br />
      	  Copyright © <a href="#">2014 OISB</a>. All rights reserved. 
</p>
      <ul class="fmenu">
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">My Lab</a></li>
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
