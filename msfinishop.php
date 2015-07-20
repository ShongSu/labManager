<?php
error_reporting(0);
session_start();
if(!isset($_SESSION['Id_User'])){
	header("Location:personal.html");
	exit();
}

	include('conn.php');
	$rowid=$_POST['id'];
		$currenttime=date('Y-m-d H:i:s');
		$finishsql = mysql_query("UPDATE msstatus SET Finished='Finished', FinishedTime='$currenttime' where md5(MS_ID)='$rowid'");
//		$currentweek=mysql_result(mysql_query("select weekofyear(curdate())"),0);
		if(mysql_affected_rows())
		{
	         	    echo "<script language='javascript'> alert('The status has been updated successfully .') </script> ";
	         	    echo "<script language='javascript'> self.location='myms.php'</script> ";
	        }
	        else
	        {
	        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
	           	    echo "<script language='javascript'> self.location='myms.php'</script> ";

	        }



		mysql_close($con);
		
	//	header("Refresh:3;url=dutytable.php");
?>


