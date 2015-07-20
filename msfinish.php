
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
      <div class="logo"><h1><span>Figeys' Lab</span> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">About Us</a></li>
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
<p><strong>Your Name: </strong>
<?php echo $name;
	echo '<br />'; 
	$rowid=$_GET['id'];
 ?>
</p>

<?php
			$result = mysql_query("select * from msstatus where md5(MS_ID)='$rowid'");
			while($row = mysql_fetch_array($result))
			{
				$rowTime=$row['Time_K'];
				$rowGradient=$row['Gradient'];
				$rowExamples=$row['Examples'];
				$rowSpecies=$row['Species'];
				$rowProject=$row['Project'];
				$rowEquipment=$row['Equipment'];
				$rowFinished=$row['Finished'];
				$rowStartTime=$row['StartTime'];
				$currentDate=date('Y-m-d');
				$currentTime=date('H:i');


 			 	echo "<fieldset style='width:96%'>";
				echo  "<legend style='font-size:14px;'>".Analyzing."</legend>";
	echo " 
	<table broder='0'>
	<tr id='special'>	
	<form action='msfinishop.php' method='POST'>
	<input type='hidden' name='id' value='$rowid' />
	<td id='special'><span>Applied Time</span></td>
	<td id='special'><input type='text' name='Time' value='$rowTime'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Gradient</span></td>
	<td id='special'><input type='text' name='Gradient' value='$rowGradient' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Samples</span></td>
	<td id='special'><input type='text' name='Examples' value='$rowExamples'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Species</span></td>
	<td id='special'><input type='text' name='Species' value='$rowSpecies'  disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Project</span></td>
	<td id='special'><input type='text' name='Project' value='$rowProject' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Equipment</span></td>
	<td id='special'><input type='text' name='Equipment' value='$rowEquipment' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Start Time</span></td>
	<td id='special'><input type='text' name='Equipment' value='$rowStartTime' disabled='disabled' /></td>
	</tr>
	<tr id='special'>	
	<td id='special'><span>Finished Time</span></td>
	<td id='special'>
	<input type='date' name='spDate' value='$currentDate' />
	<input type='time' name='spTime' value='$currentTime' /></td>

	</tr>
	<tr id='special'>	
	<td id='special'><input type='submit' name='submit' value='Confirm' /></td>
	<td id='special'><a href='myms.php'><input type='button' name='cancel' value='Back' /></a></td>
	</tr>
	</form>
	</table>
	";
				echo "</fieldset>";


			}


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
            <li><a href="index.php">Home</a></li>
            <li><a href="workshop.html">Resources</a></li>
            <li><a href="personal.php">Login</a></li>
            <li><a href="tools.html">Tools</a></li>
            <li><a href="about.html">About Us</a></li>

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
          <li class="active"><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">About Us</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
