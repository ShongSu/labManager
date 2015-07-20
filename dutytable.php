
<html>
<head>
<title>Lab Duty</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />

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
        <link rel="stylesheet" href="ui.tabs.css" type="text/css" media="print, projection, screen">
        <style type="text/css" media="screen, projection">
            /* Not required for Tabs, just to make this demo look better... */
            body, h1, h2 {
                font-family: "Trebuchet MS", Trebuchet, Verdana, Helvetica, Arial, sans-serif;
            }
            p {
                margin: 0;
            }
            pre, pre+p, p+p {
                margin: 1em 0 0;
            }
            code {
                font-family: "Courier New", Courier, monospace;
            }
            td.highlight {
            	color:#0000cc;
            	font-weight:bold;
            		
            }
        </style>

        <script src="js/jquery-1.2.4b.js" type="text/javascript"></script>
        <script src="js/ui.core.js" type="text/javascript"></script>
        <script src="js/ui.tabs.js" type="text/javascript"></script>
        <script type="text/javascript">
            $(function() {
                $('#rotate > ul').tabs({ fx: { opacity: 'toggle' } }).tabs('rotate', 0);
            });
        </script>  


</head>
<body>



<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php"><span>Figeys' Lab</span></a> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
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
          <h2><span>Figeys' Lab Routine Duty Table</span></h2>   
          	<?php echo "current user: ". $name; ?>
		<div class="clr"></div>
	         <div class="login">
    <div id="rotate">
            <ul>
                <li><a href="#fragment-1"><span>2014 lab duty</span></a></li>
                <li><a href="#fragment-2"><span>2014 TC duties</span></a></li>
            </ul>
            <div id="fragment-1">
        		<div>
			        <p>
			        <ul>
			        <li>Overall lab organization and maintenance Every week to be done by lab members)</li>
			        	<ul>
						<li>Sending dishes to autoclave; Preparing dishes for autoclave (Aluminium foil and autoclave tape) putting away cleaned dishes</li>
						<li>Changing the Biohazard bags and autoclaving of biohazard waste </li>
						<li>Regular cleaning: Keeping water baths, centrifuges, and other common equipment maintained</li>
						<li>pH meter (every MONDAY) ; Making sure that calibration is done and buffer levels in electrodes at optimal</li>
						<li>Check the -80 Freezer weekly and de-ice when necessary</li>
						<li>Check supplies (pipets, conical tubes, 1.5ml/0.6ml tubes, etc) and replenish from storage room </li>
					</ul>
				</ul>
				</p>
				<p><form action="sign.php" method="post">
					<input type="submit"  value="Checkin"/><a href="personal.php"><input type='button' name='cancel' value='Cancel'></a></p></form>

			</div>

		<?php
			include('conn.php');
			$result = mysql_query("select * from labduty");
	
			echo "<table id='schedule' border='1' cellspacing=0 cellpadding=3>
			<tr>
			<th rowspan='2'>Year</th>
			<th rowspan='2'>Week</th>
			<th colspan='2'>Date</th>
			<th  colspan='2'>Autoclaving Dishes</th>
			<th  colspan='2'>Changing Biohazard bags and dropping off</th>
			<th  colspan='2'>Regular Cleanin</th>
			<th  colspan='2'>pH meter</th>
			<th  colspan='2'>-80 Freezer</th>
			<th  colspan='2'>Lab Restocking</th>
			</tr>
			
			<tr>
			<th>From</th>
			<th>To</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>

			</tr>
			";

			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Year'] . "</td>";
			  echo "<td>" . $row['Week'] . "</td>";
			  $from=date('m-d',strtotime(date($row['D_From'])));
			  echo "<td>" . $from . "</td>";
			  $to=date('m-d',strtotime(date($row['D_To'])));
			  echo "<td>" . $to . "</td>";
			  echo "<td>" . $row['AD_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['AD_Sign'] . "</td>";
			  echo "<td>" . $row['CB_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['CB_Sign'] . "</td>";
			  echo "<td>" . $row['RC_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['RC_Sign'] . "</td>";
			  echo "<td>" . $row['PM_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['PM_Sign'] . "</td>";
			  echo "<td>" . $row['F_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['F_Sign'] . "</td>";
			  echo "<td>" . $row['LR_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['LR_Sign'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
		?>            
		</div>
		<!--------------------------------------------------------------------------------------->
            <div id="fragment-2">	
            	<div>
			        <p>
			        <ul>
			        <li>Overall Tissue Culture organization and maintenance (Every week to be done by lab members)</li>
			        	<ul>
						<li>Make sure that biohazard bags are not overfilled; if it is, tie it up, place tied bag on the side and use a new bag</li>
						<li>Make sure that Sharps container (YELLOW) is not overfilled </li>
						<li>Replace 5, 10, 25 ml pipettes as per usage (spray with 70% ETOH) </li>
						<li>Decontaminate the waste media in aspirator with 10% bleach, leave in sink for no longer than 20mins and DISACRD after</li>
					</ul>
				</ul>
				</p>
				<p><form action="tcsign.php" method="post">
					<input type="submit"  value="Checkin"/><a href="personal.php"><input type='button' name='cancel' value='Cancel'></a></p> </form>
			</div>
			<br />

			<?php
			include('conn.php');
			$result = mysql_query("select * from tcduty");
	
			echo "<table id='schedule' border='1' cellspacing=0 cellpadding=3>
			<tr>
			<th rowspan='2'>Year</th>
			<th rowspan='2'>Week</th>
			<th colspan='2'>Date</th>
			<th  colspan='2'>Biohazard bags</th>
			<th  colspan='2'>Sharps Container</th>
			<th  colspan='2'>Restocking pipets</th>
			<th  colspan='2'>Decontamination of Aspirator</th>

			</tr>
				
			<tr>
			<th>From</th>
			<th>To</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>
			<th>On duty</th>
			<th>Checkin</th>


			</tr>
			"; 
			while($row = mysql_fetch_array($result))
			  {
			  echo "<tr>";
			  echo "<td>" . $row['Year'] . "</td>";
			  echo "<td>" . $row['Week'] . "</td>";
			  $from=date('m-d',strtotime(date($row['D_From'])));
			  echo "<td>" . $from . "</td>";
			  $to=date('m-d',strtotime(date($row['D_To'])));
			  echo "<td>" . $to . "</td>";
			  echo "<td>" . $row['BB_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['BB_Sign'] . "</td>";
			  echo "<td>" . $row['SC_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['SC_Sign'] . "</td>";
			  echo "<td>" . $row['RP_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['RP_Sign'] . "</td>";
			  echo "<td>" . $row['DA_Duty'] . "</td>";
			  echo "<td class='highlight'>" . $row['DA_Sign'] . "</td>";
			  echo "</tr>";
			  }
			echo "</table>";

			mysql_close($con);
				
				
				
				
				?>
            </div>
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
