
<html>
<head>
<title>Laboratory Duties</title>
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
          <h2><span>Laboratory Duties</span></h2><div class="clr"></div>
	         <div class="login">
			<ol>
				<!----------------------------------List 1----------------------------------------->
				<li>1. Overall lab organization and maintenance Every 2 weeks to be done by lab members)
					<ul>
						<li:hidden>
							<ul>
				      			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Sending dishes to autoclave. Preparing dishes for autoclave (Aluminium foil and autoclave tape) putting away cleaned dishes</li>
				      			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Changing the Biohazard bags and autoclaving of biohazard waste</li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Regular cleaning: Keeping water baths, centrifuges, and other common equipment maintained</li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ pH meter (every MONDAY) ; Making sure that calibration is done and buffer levels in electrodes at optimal</li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Check the -80 Freezer weekly and de-ice when necessary</li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Check supplies (pipets, conical tubes, 1.5ml/0.6ml tubes,  etc)  and replenish from storage room</li>
							</ul>
						</li>				    	
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◇ Specific Lab duties: 
							<ul>
				      			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Biweekly disposal of chemical waste including weekly disposal of MS waste (Shelley & Deeptee)</li>
				      			<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Chemical/Glass waste disposal and waste containers replacement (Shelley & Deeptee)</li>
								<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Trypsin Aliquot for in-solution digests (Shelley)</li>	
							</ul>
						</li>
			    		</ul>
			  	</li>
				<!----------------------------------List 2----------------------------------------->
 			  	<li>2. Lab Inventory (Deeptee)
 					<ul>
	 					<ul>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Posting Current stock at all locations (acid, base, flammable cabinets, chemical shelf, fridge, -20 Freezer, -80 freezer) and keeping the list up to date</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Keeping on line inventory updated</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Keeping lab antibody, plasmid database up to date</li>
	 					</ul>
 					</ul>
	 			</li>
				<!----------------------------------List 3----------------------------------------->
				<li>3. Lab stocks (Myriam)
					<ul>
	 					<ul>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ All stock solutions maintained (10X TBST, 20X Transfer Buffer, 10X MOPS…)</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Preparing aliquots of stock antibodies and storing them in appropriate location</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Maintaining antibiotic aliquots for bacterial work</li>
	 					</ul>
 					</ul>
 				</li>
				<!----------------------------------List 4----------------------------------------->
				<li>4. Ordering and receiving (Deeptee)
					<ul>
	 					<ul>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Ordering and tracking of all orders by Grant</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Receiving, logging items, unpacking and stocking lab</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Balancing of spending (in coordination with Dr Daniel Figeys)</li>
						 	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Bill payments information</li>
						 	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Receiving/ Sending of FedEx packages- perishables</li>
	 					</ul>
 					</ul>
				</li>
				<!----------------------------------List 5----------------------------------------->
				<li>5. Tissue culture lab
					<ul>
	 					<ul>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Maintaining all stocks of media, antibiotic, trypsin and FBS (aliquoting Qualified FBS, Heat Inactivated FBS, Dialyzed FBS, Anti-Anti, Trypsin) - Deeptee</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Making stocks of Heavy amino acids (MO, K8 and R10) - Shelley</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Making Heavy media for all members of lab-Shelley</li>
						 	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Stocking and maintaining supplies- Jasmine</li>
						 	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Disposal of bio-hazardous waste - Jasmine</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Monitor and change CO2 tanks as necessary – Jasmine</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Cleaning and equipment maintenance (water bath, TC hoods, Centrifuge- Once every week)-Jasmine</li>
						 	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Common area wipe down: Weekly- Jasmine</li>
						 	<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Monthly Clean-up of BSCs -Jasmine</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Incubators: Complete break-down once every year-Jasmine and Deeptee</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Fridge Wipe down and Freezer: At scheduled lab clean-up dates</li>
	 					</ul>
 					</ul>
				</li>
				<!----------------------------------List 6----------------------------------------->
				<li>6. Mass Spectrometry
					<ul>
						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◇ Zhibin:</li>
	 					<ul>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Gas: check levels, order, exchange</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ LC Buffer: check, make, refill</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Pump oil: check, refill, ballast</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Chiller: water level check and refill</li>
	 					</ul>
	 					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◇ Shelley:</li>
	 					<ul>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Update MS log (User, date, method, number of hours, project description)</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Back up MS data in NAS and Prohits for all users</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Maintain queue for MS availability</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Prepare MS waste for pick up</li>
	 					</ul>
						<li> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;◇ Collectively:</li>
	 					<ul>	 
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Calibration</li>
	 						<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;■ Service for proteomic resource centre</li>
 					</ul>		
 				</ol>
			</li>
			<!----------------------------------End List----------------------------------------->
		<br />
			<a href="personal.php">Back</a>
		<br />


	        </div>
         </div>
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
