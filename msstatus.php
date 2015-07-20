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
<!-- CuFon ends -->
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
          <li class="active"><a href="workshop.html">Resources</a></li>
          <li><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
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
			<th>Applied Time</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>What project is it related To?</th>
			<th>Equipment</th>
			<th>Start Time</th>
			</tr>";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Time_K'] . "</td>";
			  echo "<td>" . $row['Name'] . "</td>";
			  echo "<td>" . $row['Gradient'] . "</td>";
			  echo "<td>" . $row['Examples'] . "</td>";
			  echo "<td>" . $row['Species'] . "</td>";
			  echo "<td>" . $row['Project'] . "</td>";
			  echo "<td>" . $row['Equipment'] . "</td>";
			  echo "<td>" . $row['StartTime'] . "</td>";
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
	<a style="margin: 90%;"href="mshistory.php?Type=1" >History</a>
	 	<?php

			include('conn.php');
			
			$result = mysql_query("SELECT * FROM msstatus where Equipment='Orbitrap XL (old one)' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
			
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Applied Time</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finshed?</th>
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
 	<a style="margin: 90%;"href="mshistory.php?Type=2" >History</a>
    		<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Equipment='Oribtrap Elite (new one)' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Applied Time</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finshed?</th>
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
  	<a style="margin: 90%;"href="mshistory.php?Type=3" >History</a>

            		<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Equipment='Qtrap5500' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Applied Time</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finshed?</th>
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
 	<a style="margin: 90%;"href="mshistory.php?Type=4" >History</a>

    		    		<?php

			include('conn.php');

			$result = mysql_query("SELECT * FROM msstatus where Equipment='Q-Exactive' and Finished != 'Finished' and Finished != 'Cancelled' order by Finished, Time_K ");
	
			echo "<table id='myMSTable'>
			<tr style='font-variant: small-caps; background-color:#E0E0E0;'>
			<th>Applied Time</th>
			<th> Name</th>
			<th>How long gradient?</th>
			<th>How many samples do you have?</th>
			<th>What is the species of your sample?</th>
			<th>How urgent is your analysis to be done?</th>
			<th>What project is it related To?</th>
			<th>Finshed?</th>
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
          <h2 class="star"><span>Navigation</span> </h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="meeting.php"><strong>Lab Meeting</strong></a></li>
            <li><a href="resources.php"><strong>Lab Resources</strong></a></li>
            <li><a href="fridge.php"><strong>Freezer and Fridge</strong></a></li>
            <li><a href="msstatus.php"><strong>MS Utility Status</strong></a></li>

          </ul>
        </div>
 <!--       <div class="gadget">
          <h2 class="star"><span>Sponsors</span></h2><div class="clr"></div>
          <ul class="ex_menu">
            <li><a href="#" title="Website Templates">DreamTemplate</a><br />Over 6,000+ Premium Web Templates</li>
            <li><a href="#">TemplateSOLD</a><br />Premium WordPress &amp; Joomla Themes</li>
            <li><a href="#" title="Affordable Hosting">ImHosted.com</a><br />Affordable Web Hosting Provider</li>
            <li><a href="#" title="Stock Icons">MyVectorStore</a><br />Royalty Free Stock Icons</li>
            <li><a href="#" title="Website Builder">Evrsoft</a><br />Website Builder Software &amp; Tools</li>
            <li><a href="#" title="CSS Templates">CSS Hub</a><br />Premium CSS Templates</li>
          </ul>
        </div>-->
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
 <!--   <div class="fbg_resize">
      <div class="col c1">
        <h2><span>About</span></h2>
        <img src="images/white.jpg" width="56" height="56" alt="pix" />
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec libero. Suspendisse bibendum. Cras id urna. Morbi tincidunt, orci ac convallis aliquam, lectus turpis varius lorem, eu posuere nunc justo tempus leo. llorem, eu posuere nunc justo tempus leo. Donec mattis, purus nec placerat bibendum. <a href="#">Learn more...</a></p>
      </div>
      <div class="col c2">
        <h2><span>Lorem Ipsum</span></h2>
        <ul class="sb_menu">
          <li><a href="#">consequat molestie</a></li>
          <li><a href="#">sem justo</a></li>
          <li><a href="#">semper</a></li>
          <li><a href="#">magna sed purus</a></li>
          <li><a href="#">tincidunt</a></li>
        </ul>
      </div>
      <div class="col c3">
        <h2>Contact</h2>
        <p>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue.</p>
        <p><a href="mailto:support@yoursite.com">support@yoursite.com</a></p>
        <p>+1 (123) 444-5677<br />+1 (123) 444-5678</p>
        <p>Address: 123 TemplateAccess Rd1</p>
      </div>
      <div class="clr"></div>
    </div>-->
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



