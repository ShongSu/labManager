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


		
		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);

		$sql="UPDATE labduty SET  AD_Sign='$name'  WHERE AD_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		$sql="UPDATE labduty SET  CB_Sign='$name'  WHERE CB_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		$sql="UPDATE labduty SET  RC_Sign='$name'  WHERE RC_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		$sql="UPDATE labduty SET  PM_Sign='$name'  WHERE PM_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }

		$sql="UPDATE labduty SET  F_Sign='$name'  WHERE F_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }

		 $sql="UPDATE labduty SET  LR_Sign='$name'  WHERE LR_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		mysql_close($con);


		header("Refresh:0;url=dutytable.php");
?>


