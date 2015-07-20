
<html>
<head>
<title>Lab Duty Management</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />

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

$power = mysql_query("select * from users where Name='$name' and Recources=1");
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
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>Update</span></h2><div class="clr"></div>
     		<p class="meeting"> 
	
<?php
	$Year=$_GET['Year'];
	$Week=$_GET['Week'];
	$currentyear=date('Y');
	$currentweek=date('W');

	include('conn.php');
	$result = mysql_query("select * from labduty where Year=$Year and Week=$Week");
	
	while($row = mysql_fetch_array($result))
	{
	$rowYear=$row['Year'];
	$rowWeek=$row['Week'];
	$rowFrom=$row['D_From'];
	$rowTo=$row['D_To'];
	$rowAD=$row['AD_Duty'];
	$rowCB=$row['CB_Duty'];
	$rowRC=$row['RC_Duty'];
	$rowPM=$row['PM_Duty'];
	$rowF=$row['F_Duty'];
	$rowLR=$row['LR_Duty'];
//	echo $rowAD;
	}
	echo "
	<table broder='0'>
	<tr id='special'>
	<form action='labdutyupdateop.php' method='POST'>
	<input type='hidden' name='oldyear' value='$rowYear' />
	<input type='hidden' name='oldweek' value='$rowWeek' />
	</tr>
	<tr  id='special'>
	<td  id='special'><span>Year:</span></td>
	<td  id='special'><input type='number' name='Year' value='$rowYear'  min='$currentyear' /></td>
	</tr>
	<tr  id='special'>
	<td  id='special'><span>Week:</span></td>
	<td  id='special'><input type='number' name='Week' value='$rowWeek' min='1' max='53'  /></td>
	</tr>

	<tr  id='special'>
	<td  id='special'><span>Autoclaving Dishes:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo "	<td  id='special'> <select name='AD_Duty'>
		<option value='$rowAD'>$rowAD</option>";


		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }

		echo "</select> </td>";
		echo '</tr>';
	echo "	<tr  id='special'>
	<td  id='special'><span>Changing Biohazard bags and dropping off	:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo "	<td  id='special'> <select name='CB_Duty'>
		<option value='$rowCB'>$rowCB</option>";

		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }

		echo "</select> </td>";
		echo '</tr>';
		
	echo "	<tr  id='special'>
	<td  id='special'><span>Regular Cleanin:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo "	<td  id='special'> <select name='RC_Duty'>
		<option value='$rowRC'>$rowRC</option>";

		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }

		echo "</select> </td>";
		echo '</tr>';

	echo "	<tr  id='special'>
	<td  id='special'><span>pH meter:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo "	<td  id='special'> <select name='PM_Duty'>
		<option value='$rowPM'>$rowPM</option>";

		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }

		echo "</select> </td>";
		echo '</tr>';

	echo "	<tr  id='special'>
	<td  id='special'><span>-80 Freezer:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo "	<td  id='special'> <select name='F_Duty'>
		<option value='$rowF'>$rowF</option>";

		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }

		echo "</select> </td>";
		echo '</tr>';

	echo "	<tr  id='special'>
	<td  id='special'><span>Lab Restocking:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo "	<td  id='special'> <select name='LR_Duty'>
		<option value='$rowLR'>$rowLR</option>";

		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }

		echo "</select> </td>";
		echo '</tr>';

	echo "
	<tr id='special'>
	<td id='special'><input type='submit' name='submit' value='Update' /></td>
	<td id='special'><a href='labdutymanage.php'><input type='button' name='cancel' value='Back'></a></td>
	</tr>
	</table>
	</form> 
	";


?>



	
	</p>          
	</div>
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
