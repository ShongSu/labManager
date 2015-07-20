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
	  $dates= date('Y-m-d');
	  $year=date('Y');
	  $weeks=date('W',strtotime(date('Y-m-d')));
	  $review=$_POST['review'];
	  $review=mysql_escape_string($_POST['review']);
	  $review=str_replace('\r\n','<br />',$review);
	  $result=$_POST['organized'];
	  $discuss=$_POST['discuss'];
	  $plan=mysql_escape_string($_POST['plan']);
	  $plan=str_replace('\r\n','<br />',$plan);
	  $dayofweek=date('l');
	  switch ($dayofweek)
	  {
	  	  case 'Monday':
	  	  case 'Tuesday':
	  	  case 'Wednesday': ;break;
	  	  case 'Thursday':
	  	  case 'Friday':
	  	  case 'Saturday':
	  	  case 'Sunday': $weeks++;break;	  
	  }


	  	$select=mysql_query("SELECT * FROM report WHERE Name='$name' AND Year='$year' AND Week='$weeks'");
//		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);
		if(!mysql_num_rows($select)){
			$sql="INSERT INTO  report (Name, Year, Week, Date, Review, Result, Discuss, Plan) VALUES('$name','$year', '$weeks', '$dates','$review','$result','$discuss','$plan')";
			if (!mysql_query($sql,$con))
			  {
			  die('Error: ' . mysql_error());
			  }
			  else 
			  {
			  	  echo "<script language='javascript'> alert('Thank you, your report has been submitted!') </script> ";
         	   	   	  echo "<script language='javascript'> window.location.href='personal.php'; </script> ";
			  }
		}
		else {
			  	  echo "<script language='javascript'> alert('Submit failed. You have been already submitted your report this week!') </script> ";
         	   	   	  echo "<script language='javascript'> window.location.href='personal.php';</script> ";
		}



		mysql_close($con);
		
	//	header("Refresh:3;url=dutytable.php");
?>


