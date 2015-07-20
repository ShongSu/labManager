
<html>
<head>
<title>Meeting Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Meeting=1");
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
          <h2><span>Insert New Meeting</span></h2><div class="clr"></div>
     		<p class="meeting"> 
<?php
	$today=date('Y-m-d');
	$startTime='12:00';
	$endTime='14:00';
	$venue='4161';

	echo " 
	<table border='0'>
	<form action='meetinginsertop.php' method='POST'>
	<input type='hidden' name='rowdate' value='$rowDates' />
	<tr  id='special'>
	<td  id='special'><span>Date:</span></td>
	<td  id='special'><input type='date' name='Date' value='$today'  /></td>
	</tr>
	<tr  id='special'>
	<td  id='special'><span>Work Presentation:</span></td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo '	<td  id="special"> <select name="WorkPrst1">';
		echo '<option value="NA">Select...</option> ';

		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }
		echo "</select>";

		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo '<select name="WorkPrst2">';
		echo '<option value="NA">Select...</option> ';

		    while($row=mysql_fetch_row($result)){     
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }
		echo "</select> </td>";
		echo '</tr>';

	
	echo "	<tr  id='special'>
	<td id='special'><span>Journal Presentation / Workshop:</span> </td>";
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo '<td id="special"><select name="JnoPrstWorkshop1">';
		echo '<option value="NA">Select...</option> ';

		    while($row=mysql_fetch_row($result)){     
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }
		echo "</select>";

		$sql="select Name from users order by Name"; 
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo '<select name="JnoPrstWorkshop2">';
		echo '<option value="NA">Select...</option> ';

		    while($row=mysql_fetch_row($result)){     
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }
		echo "</select></td>";

		echo '</tr>';



	echo "
	<tr id='special'>
	<td id='special'><span>Venue:</span></td>
	<td id='special'><input type='text' name='Venue' value='$venue'  /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>Start:</span></td>
	<td id='special'><input type='time' name='StartTime' value='$startTime'  /></td>
	</tr>
	<tr id='special'>
	<td id='special'><span>End:</span></td>
	<td id='special'><input type='time' name='EndTime' value='$endTime'  /></td>
	</tr>
	<tr id='special'>
	<td id='special'><input type='submit' name='submit' value='Insert' /></td>
	<td id='special'><a href='meetingadmin.php'><input type='button' name='cancel' value='Back'></a></td>
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
