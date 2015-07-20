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

	  $review=$_POST['review'];
	  $review=mysql_escape_string($_POST['review']);
	  $review=str_replace('\r\n','<br />',$review);

	  $plan=mysql_escape_string($_POST['plan']);
	  $plan=str_replace('\r\n','<br />',$plan);

	  $rowid=$_POST['rowid'];
	  
//	  echo 'id:'.$rowid.'<br />';
//	  echo 'review:'.$review.'<br />';
//	  echo 'plan:'.$plan.'<br />';
	  

	  	$sql=mysql_query("UPDATE report SET Review='$review', Plan='$plan' WHERE ID=$rowid");
//		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);
			if(mysql_affected_rows())
			{
		         	    echo "<script language='javascript'> alert('Your report has been updated .') </script> ";
		         	    echo "<script language='javascript'> self.location='myreport.php'</script> ";
		        }
		        else
		        {
		        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
		           	    echo "<script language='javascript'> self.location='myreport.php'</script> ";

		        }



		mysql_close($con);
		
	//	header("Refresh:3;url=dutytable.php");
?>


