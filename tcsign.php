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

		$sql="UPDATE tcduty SET  BB_Sign='$name'  WHERE BB_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		$sql="UPDATE tcduty SET  SC_Sign='$name'  WHERE SC_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		$sql="UPDATE tcduty SET  RP_Sign='$name'  WHERE RP_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		
		$sql="UPDATE tcduty SET  DA_Sign='$name'  WHERE DA_Duty='$name' AND Week='$currentweek'";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }

		mysql_close($con);
		
		header("Refresh:0;url=dutytable.php");
?>


