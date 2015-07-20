<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
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
	  $dates= date('Y-m-d H:i:s');
	  $gradientValue=$_POST['long'];
	  switch($gradientValue)
	  {
	  	  case '60long':$gradient=60;break;
	  	  case '120long':$gradient=120;break;
	  	  case 'Other':$gradient= $_POST['tlong'];
	  }
	  $howMany=$_POST['tsamples'];
	  $species=$_POST['species'];
	  if ($species=='Other')
	  	  $species=$_POST['tspecies'];
	  $urgent= $_POST['urgent'];
	  if ($urgent=='Other')
	  	  $urgent=$_POST['turgent'];
	  $project=$_POST['tproject'];
  	  $method=$_POST['method'];
	  if ($method=='Other')
	  	  $method=$_POST['tmethod'];
	  $equipment=$_POST['equipment'];
		  
	 $comment=$_POST['comment'];
	  
/*	  echo "Name:".$name."<br />";
	  echo "Date:".$dates."<br />";
	  echo "Gradient:".$gradient."<br />";
	  echo "howMany:".$howMany."<br />";
	  echo "species:".$species."<br />";
	  echo "urgent:".$urgent."<br />";
	  echo "project:".$project."<br />";
	  echo "method:".$method."<br />";
	  echo "equipment:".$equipment."<br />";
*/

	  	
//		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);
		$sql="INSERT INTO msstatus(`Time_K`, `Name`, `Gradient`, `Examples`, `Species`, `Urgent`,  `Project`, `Digestion`, `Equipment`,`Finished`, `Comment`) VALUES ('$dates','$name','$gradient','$howMany','$species','$urgent','$project','$method','$equipment','Waiting','$comment')";
		if (!mysql_query($sql,$con))
		  {
		  die('Error: ' . mysql_error());
		  }
		  else 
		  {
		  	  echo "<script language='javascript'> alert('Thank you, your booking has been submitted!') </script> ";
         	   	   	  echo "<script language='javascript'> window.location.href='personal.php';</script> ";
		  }


		mysql_close($con); 
		
	//	header("Refresh:3;url=dutytable.php");
?>


