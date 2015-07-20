<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	


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

<?php
	$rowyear=$_POST['Year'];
	$rowweek=$_POST['Week'];
	$rowAD=$_POST['AD_Duty'];
	$rowCB=$_POST['CB_Duty'];
	$rowRC=$_POST['RC_Duty'];
	$rowPM=$_POST['PM_Duty'];
	$rowF=$_POST['F_Duty'];
	$rowLR=$_POST['LR_Duty'];

	$timestamp = mktime(0,0,0,1,1,$rowyear);
	$dayofweek = date("w",$timestamp);
	if($rowweek != 1)
	{
	$distance = ($rowweek - 1)*7 - $dayofweek + 1;
	}
	else 
	{
	if($dayofweek == 0)
	{
	$dayofweek =7;
	}
	$distance =1 - $dayofweek;
	}
	$passed_seconds = $distance * 86400;
	$timestamp +=$passed_seconds;
	$first_date_of_week = date("Y-m-d",$timestamp);
	$timestamp += 6 * 86400;
	$last_date_of_week = date("Y-m-d",$timestamp);


	
	$rowFrom=$first_date_of_week;
	$rowTo=$last_date_of_week;
?>



 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
<?php

	include('conn.php');
	  	$select=mysql_query("SELECT * FROM labduty WHERE Year='$rowyear' AND Week='$rowweek'");
//		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);
		if(!mysql_num_rows($select)){
			$sql="INSERT INTO  labduty (Year, Week, D_From, D_To, AD_Duty, CB_Duty, RC_Duty, PM_Duty, F_Duty, LR_Duty) VALUES('$rowyear','$rowweek', '$rowFrom', '$rowTo','$rowAD', '$rowCB','$rowRC','$rowPM','$rowF','$rowLR')";
			if (!mysql_query($sql,$con))
			  {
			  die('Error: ' . mysql_error());
			  }
			  else 
			  {
			  	  echo "<script language='javascript'> alert('Insert successfully!') </script> ";
         	   	   	  echo "<script language='javascript'> window.location.href='labdutymanage.php'; </script> ";
			  }
		}
		else {
			  	  echo "<script language='javascript'> alert('Insert failed. The record of this week is already exists!') </script> ";
         	   	   	  echo "<script language='javascript'> window.location.href='labdutymanage.php';</script> ";
		}



		mysql_close($con); 

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>