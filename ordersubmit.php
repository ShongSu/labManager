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
	  
	  $dates= date('Y-m-d H:i:s');
	  $productName=$_POST['product'];
	  $catalogue=$_POST['catalogue'];
	  $company=$_POST['company'];
	  $links=$_POST['link'];
	  $project=$_POST['project'];
	  $remark=$_POST['remark'];

/*	  echo "Date:".$dates."<br />";
	  echo "Name:".$productName."<br />";
	  echo "catalogue:".$catalogue."<br />";
	  echo "company:".$company."<br />";
	  echo "links:".$links."<br />";
	  echo "project:".$project."<br />";
	  echo "remark:".$remark."<br />";
	  echo "name:".$name."<br />";
*/

	  	
//		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);
		$sql="INSERT INTO product (`Owner`,`Name`, `Catalogue`, `Company`, `Link`, `Date`,  `Project`, `Status`, `Stamp`,`Remark`) VALUES ('$name','$productName','$catalogue','$company','$links','$dates','$project','Setup','$dates','$remark')";
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


