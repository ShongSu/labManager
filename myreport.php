
<html>
<head>
<title>Lab Duty</title>
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
          <h2><span>My report history</span></h2>   
          	<?php echo "current user: ". $name; ?>
		<div class="clr"></div>
	         <div class="login">

<form action="myreports.php" method="GET">
<?php
	$dyear=date("Y");
	$dweek=date("W")-1;
	echo 'Year: <input type="number" min="2014" max="2024" required="required" value="'.$dyear.'" name="years" />
	Week: <input type="number" min="0" max="52" required="required" value="'.$dweek.'" name="weeks" />'
	?>
	<input type="submit" name="submit" value="View"/>
	<a href="personal.php"><input type='button' name='cancel' value='Cancel'></a>
	<a href="editlastreport.php"><input type='button' name='edit' value='Edit last report'></a>
	
	
</form>


<?php
	$result = mysql_query("select Date from report where Name='$name' ORDER BY Date DESC");

         echo "<table id='schedule' border='1' cellspacing=0 cellpadding=3>
			<tr>
			<th>Year</th>
			<th>Week</th>
 			<th>Date</th>
  			<th>View</th>
			</tr>";
			
 			while($row = mysql_fetch_array($result))
			  {
			 
			  	$dates=$time = date('Ymd',strtotime($row['Date']));
			  	$year=$time = date('Y',strtotime($row['Date']));
			 	$week = mysql_result(mysql_query("select weekofyear($dates)"),0);
			 	echo "<tr>";
			   	echo "<td>" . $year. "</td>";
			  	echo "<td>" . $week. "</td>";
				echo "<td>" . $row['Date'] . "</td>";
				echo "<td><a href='myreports.php?years=$year&weeks=$week'>View</a></td>";

				echo "</tr>";
			}
				echo "</table>";

			mysql_close($con);
?>				



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
