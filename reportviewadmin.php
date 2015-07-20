
<html>
<head>
<title>Report Management</title>
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

$power = mysql_query("select * from users where Name='$name' and Report=1");
if(!mysql_num_rows($power)){
	header("Location:personal.php");
	exit();
}

//echo $name;

?>
	<?php
		function search()
		{
			include('conn.php');

			$currentweek = date('W',strtotime(date('Y-m-d')));
			$currentyear = date('Y');
			$result = mysql_query("SELECT * FROM report WHERE Year=$currentyear AND Week = $currentweek order by Date ASC");
	
			
			

			while($row = mysql_fetch_array($result))
			  {
			  $fbyear=$row['Year'];
			  $fbweek=$row['Week'];
 			  $fbname=$row['Name'];

			  echo "<fieldset style='width:100%'>";
			  echo "<legend style='font-size:14px'>".$row['Name'].", ".$row['Date'].", Week ". $row['Week']."</legend>";   
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Review:</strong><br /> ".$row['Review']."<br /><br />";
	  		  echo "<strong style='font-size:14px;font-variant:small-caps'>Plan:</strong><br />".$row['Plan']."<br /><br />"; 			  	  		  echo "<strong style='font-size:14px;font-variant:small-caps'><a href='reportfeedback.php?Year=$fbyear&Week=$fbweek&Name=$fbname'>Feedback</a>:</strong>".$row['Feedback']."<br />";
			  echo "</fieldset>";


			 
			  
	
			  echo "<br />";
			  }
		

			

			mysql_close($con);
		}
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
          <h2><span>Report Management</span></h2>
            		<div>
			<?php 
			$currentyear=date('Y');
			$currentweek=date('W');
						$currentweek=33;

			echo "Today is ";
			echo date('Y-m-d'); 
	     		echo "    week ";
	     		echo date('W',strtotime(date('Y-m-d')));
	     		echo " (From ";
			echo date('Y-m-d D', strtotime('this week'));
			echo " to ";
			echo date('Y-m-d D', strtotime('last day next week'));
			echo ")";
			?>
			
			<fieldset style='width:100%'>
			<legend style='font-size:14px'>Summary</legend>
			<strong style='font-size:14px;font-variant:small-caps'>Submitted:</strong><br />
			<?php
					$sql="select Name from users order by Name";  
					$result=mysql_query($sql,$con);
					$row=mysql_fetch_array($result);
					    while($row=mysql_fetch_row($result)){    
					        foreach($row as $value){
					        	$judgment="select * from report where Name='$row[0]' and Year='$currentyear' and Week='$currentweek' ";  
					        	$resultx = mysql_query($judgment);
					        	$num = mysql_num_rows($resultx);
					        	if($num!=0)
					        	    echo "<a href='reportdisplay1.php?name=$row[0]&year=$currentyear&week=$currentweek'>".$row[0]."</a> / ";
					        }
					  }
					  
					echo "<br />"
				
				?>

			<strong style='font-size:14px;font-variant:small-caps'>Undone:</strong><br />

			<?php
					$sql="select Name from users order by Name";  
					$result=mysql_query($sql,$con);
					$row=mysql_fetch_array($result);
					    while($row=mysql_fetch_row($result)){    
					        foreach($row as $value){
					        	$judgment="select * from report where Name='$row[0]' and Year='$currentyear' and Week='$currentweek' ";  
					        	$resultx = mysql_query($judgment);
					        	$num = mysql_num_rows($resultx);
					        	if($num==0)
					        	    echo "<strong>".$row[0]." / </strong>";
					        }
					  }
					  
					echo "<br />"
				
				
				
				
				
				?>



			</fieldset>


            <div class="clr"></div>
     		<p class="meeting"> 
   	<form name='report' action='reportdisplay.php' method='POST'>
		<span>Year:</span>
		<?php
		$defaultdate=date('Y');
		echo "<input name='year' type='number' min='2014'  size='10' required='required' value='$defaultdate'/>";
		?>
		<span>Week:</span>
		<?php
		$defaultweek=date('W',strtotime(date('Y-m-d')));
		echo "<input name='week' type='number' min='1'  max='53' value='$defaultweek'/>"
		?>
		<span>Name:</span>
		<?php 
		$sql="select Name from users order by Name";  
		$result=mysql_query($sql,$con);
		$row=mysql_fetch_array($result);
		echo '<select name="name">';
		echo '<option value=""></option> ';
		    while($row=mysql_fetch_row($result)){    
		        foreach($row as $value){
		            echo "<option value=$row[0]>".$row[0]."</option>";
		        }
		    }
		echo "</select>";
		?>
		<input name='submit' type='submit' value='Search' />	
		<a href='personal.php'><input name='cancel' type='button' value='Back' /></a>	
	</form>

	<br />
	<?php search() ?>





				</p>         		</div>	
 </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
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
