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

$power = mysql_query("select * from users where Name='$name' and MS=1");
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
          	<h2>MS Realtime Status</h2>
      	<a href="personal.php">Back</a>
	<div class="clr"></div>
        </div>
        
        <div class="meeting">  
    <div class="wrap">
    <ul id="tag">
      <li class="current" >Analyzling</li>
      <li>Orbitrap XL (Old)</li>
      <li> Oribtrap Elite (New)</li>
      <li>Qtrap5500</li>
      <li>Q-Exactive</li>

   </ul>
   <div id="tagContent">
   	   
   	   
   	  <!------------------------Table 0------------------------>
      <div> 
       <br />
	<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Finished='Analyzing' ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Timestamp</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Equipment</th>
			<th>Start Time</th>
			<th>Operation</th>

			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Time_K'] . "</td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gradient'] . "</td>";
			  echo "<td>" . $row['Examples'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Urgent'] . "</td>";
			  echo "<td>" . $row['Project'] . "</td>";
			  echo "<td>" . $row['Equipment'] . "</td>";
			  echo "<td>" . $row['StartTime'] . "</td>";
			  $rowid=$row['MS_ID']; 
			  echo "<td><a href='mseditadmin.php?ID=$rowid'>Edit</a></td>";

			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
	
	?>
              <br />

	 </div>  
   	  
   	   
 <!------------------------Table 1------------------------>
      <div> 
       <br />
	<a style="margin: 92%;"href="mshistory.php?Type=1" >History</a>
	 	<?php

			include('conn.php');
			
			$result = mysql_query("SELECT * FROM msstatus where Equipment='Orbitrap XL (old one)' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
			
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Timestamp</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finished?</th>
			<th>Operation</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Time_K'] . "</td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gradient'] . "</td>";
			  echo "<td>" . $row['Examples'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Urgent'] . "</td>";
			  echo "<td>" . $row['Project'] . "</td>";
			  echo "<td>" . $row['Finished'] . "</td>";
			  $rowid=$row['MS_ID']; 
			  echo "<td><a href='mseditadmin.php?ID=$rowid'>Edit</a></td>";
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
 	<a style="margin: 92%;"href="mshistory.php?Type=2" >History</a>
    		<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Equipment='Oribtrap Elite (new one)' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Timestamp</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finished?</th>
			<th>Operation</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Time_K'] . "</td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gradient'] . "</td>";
			  echo "<td>" . $row['Examples'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Urgent'] . "</td>";
			  echo "<td>" . $row['Project'] . "</td>";
			  echo "<td>" . $row['Finished'] . "</td>";
			  $rowid=$row['MS_ID']; 
			  echo "<td><a href='mseditadmin.php?ID=$rowid'>Edit</a></td>";
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
  	<a style="margin: 92%;"href="mshistory.php?Type=3" >History</a>

            		<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Equipment='Qtrap5500' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Timestamp</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finished?</th>
			<th>Operation</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Time_K'] . "</td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gradient'] . "</td>";
			  echo "<td>" . $row['Examples'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Urgent'] . "</td>";
			  echo "<td>" . $row['Project'] . "</td>";
			  echo "<td>" . $row['Finished'] . "</td>";
			  $rowid=$row['MS_ID']; 
			  echo "<td><a href='mseditadmin.php?ID=$rowid'>Edit</a></td>";
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
 	<a style="margin: 92%;"href="mshistory.php?Type=4" >History</a>

    		    		<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Equipment='Q-Exactive' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Timestamp</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finished?</th>
			<th>Operation</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Time_K'] . "</td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gradient'] . "</td>";
			  echo "<td>" . $row['Examples'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Urgent'] . "</td>";
			  echo "<td>" . $row['Project'] . "</td>";
			  echo "<td>" . $row['Finished'] . "</td>";
			  $rowid=$row['MS_ID']; 
			  echo "<td><a href='mseditadmin.php?ID=$rowid'>Edit</a></td>";
			  echo "</tr>";
			  }
			echo "</table>";
			mysql_close($con);
	
	?>
    			  
		  <br />

 

     <br />
     </div> 

        	
        	
     <br /> 
 
	  </div>
   </div>

		
        </div>
       
 <!--       <div class="article">
          <h2><span>Lorem Ipsum</span> Dolor Sit</h2><div class="clr"></div>
          <p><span class="date">March 15, 2010</span> &nbsp;|&nbsp; Posted by <a href="#">Owner</a> &nbsp;|&nbsp; Filed under <a href="#">templates</a>, <a href="#">internet</a></p>
          <img src="images/img1.jpg" width="613" height="154" alt="image" />
          <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum, dui pede condimentum odio, ac blandit ante orci ut diam. Cras fringilla magna. Phasellus suscipit, leo a pharetra condimentum, lorem tellus eleifend magna, eget fringilla velit magna id neque. Curabitur vel urna. In tristique orci porttitor ipsum. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam.</p>
          <p>Aenean commodo elit ac ante dignissim iaculis sit amet non velit. Donec magna sapien, molestie sit amet faucibus sit amet, fringilla in urna. Aliquam erat volutpat. Fusce a dui est. Sed in volutpat elit. Nam odio tortor, pulvinar non scelerisque in, eleifend nec nunc. Sed pretium, massa sed dictum dapibus, nibh purus posuere magna, ac porta felis lectus ut neque. Nullam sagittis ante vitae velit facilisis lacinia. Cras vehicula lacinia ornare. Duis et cursus risus. Curabitur consectetur justo sit amet odio viverra vel iaculis odio gravida. Ut imperdiet metus nec erat.</p>
          <p class="spec"><a href="#" class="rm">Read more</a> &nbsp;|&nbsp; <a href="#" class="com">Comments (7)</a></p>
        </div>   -->
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
