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




 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
<?php
	$rowid=$_POST['rowid'];
	$rowComment=$_POST['Comment'];
	$spDate=$_POST['spDate'];
	$spTime=$_POST['spTime'];
	$Times=$spDate." ".$spTime;
	$rowStatus=$_POST['Status'];

/*	echo $rowid."<br />";
	echo $rowComment."<br />";
		echo $Times."<br />";
	echo $rowStatus."<br />";

//	echo $newFinished;
	
	
	echo $newFinished."<br/>";
	echo $spDate."<br/>";
	echo $spTime."<br/>";
	echo $Times."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');

		$update = mysql_query("UPDATE product SET Comment='$rowComment', Status='$rowStatus', Stamp='$Times' where md5(ID)='$rowid'");

		if(mysql_affected_rows())
		{
	         	    echo "<script language='javascript'> alert('The status has been updated successfully .') </script> ";
	         	    echo "<script language='javascript'> self.location='ordermanage.php'</script> ";
	        }
	        else
	        {
	        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
	           	    echo "<script language='javascript'> self.location='ordermanage.php'</script> ";

	        }

   	mysql_close($con); 

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>