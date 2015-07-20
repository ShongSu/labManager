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

$power = mysql_query("select * from users where Name='$name' and MS=1");
if(!mysql_num_rows($power)){
	header("Location:login.php");
	exit();
}

//echo $name;

?>

</head>
	
	
<body>




 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
<?php
	$rowid=$_POST['ID'];
	$newFinished=$_POST['Finished'];
	$spDate=$_POST['spDate'];
	$spTime=$_POST['spTime'];
	$Times=$spDate." ".$spTime;
//	echo $newFinished;
	
	
/*	echo $newFinished."<br/>";
	echo $spDate."<br/>";
	echo $spTime."<br/>";
	echo $Times."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');
	if($newFinished=='Analyzing')
	{
		$update = mysql_query("UPDATE msstatus SET Finished='$newFinished', StartTime='$Times' where MS_ID=$rowid");
	}
	else if ($newFinished=='Finished')
	{
		$update = mysql_query("UPDATE msstatus SET Finished='$newFinished', FinishedTime='$Times'  where MS_ID=$rowid");
	}
		if(mysql_affected_rows())
		{
	         	    echo "<script language='javascript'> alert('The status has been updated successfully .') </script> ";
	         	    echo "<script language='javascript'> self.location='msadmin.php'</script> ";
	        }
	        else
	        {
	        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
	           	    echo "<script language='javascript'> self.location='msadmin.php'</script> ";

	        }

   	mysql_close($con); 

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>