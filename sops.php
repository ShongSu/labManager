
<html>
<head>
<title>SOPs</title>
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
	header("Location:personal.php?status=2");
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
          <h2><span>SOPs and Tutorials</span></h2>
            <p> </p><div class="clr"></div>
	         <div class="login">
		
             <h3><a href="SOPs/sops_guide.php"><strong>Guide</strong></a></h3>
            <h3><span>Tutorials (Presentations from labmeetings)</span></h3>  
             <ul class="sb_menu">
           		 <li><a href="SOPs/Tutorial_mycoplasma.php"><strong>Mycoplasma Tutorial</strong></a></li>
                 <li><a href="SOPs/Tutorial_TC1.php"><strong>Tissue culture part 1</strong></a></li>
                 <li><a href="SOPs/Tutorial_TC2.php"><strong>Tissue culture part 2</strong></a></li>
             </ul>
       
          <h3><span>For MS and downstream</span></h3>    
           <ul class="sb_menu">
                <li><a href="SOPs/sops_datastorage.php"><strong>Mass Spec RAW file data Managing</strong></a></li>
                <li><a href="SOPs/sops_ProteomicsTools.php"><strong>How to setup "ProteomicsTools"</strong></a></li>
                <li><a href="SOPs/sops_MascotSearch.php"><strong>How to perform Mascot Search</strong></a></li>
                <li><a href="SOPs/sops_share_MS2_by_skyline.php"><strong>Sharing MS/MS Spectra by Skyline</strong></a></li>
                <li><a href="SOPs/sops_MapDrive.php"><strong>How to map drive to local computer</strong></a></li>
                <li><a href="SOPs/sops_Census_N15.php"><strong>N15 quantitation by Census</strong></a></li>
	        </ul>

				



			<br />


	        </div>
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
            <li class='active'><a href="personal.php">My Lab</a></li>
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
