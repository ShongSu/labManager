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
	$oldyear=$_POST['oldyear'];
	$oldweek=$_POST['oldweek'];

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
	$update = mysql_query("UPDATE labduty SET Year='$rowyear', Week='$rowweek', D_From='$rowFrom', D_To='$rowTo', AD_Duty='$rowAD', CB_Duty='$rowCB', RC_Duty='$rowRC', PM_Duty='$rowPM', F_Duty='$rowF', LR_Duty='$rowLR'  WHERE Year='$oldyear' and Week='$oldweek'");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been updated successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='labdutymanage.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
           	    echo "<script language='javascript'> self.location='labdutymanage.php'</script> ";

        }

   	mysql_close($con);

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>