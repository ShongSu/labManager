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
	header("Location:login.php");
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
	$rowBB=$_POST['BB_Duty'];
	$rowSC=$_POST['SC_Duty'];
	$rowRP=$_POST['RP_Duty'];
	$rowDA=$_POST['DA_Duty'];

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
	$update = mysql_query("UPDATE tcduty SET Year='$rowyear', Week='$rowweek', D_From='$rowFrom', D_To='$rowTo', BB_Duty='$rowBB', SC_Duty='$rowSC', RP_Duty='$rowRP', DA_Duty='$rowDA'  WHERE Year='$oldyear' and Week='$oldweek'");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been updated successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='tcdutymanage.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
           	    echo "<script language='javascript'> self.location='tcdutymanage.php'</script> ";

        }

   	mysql_close($con);

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>