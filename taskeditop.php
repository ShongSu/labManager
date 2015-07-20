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
	$newStatus=$_POST['Status'];
	$FinishTime=$_POST['FinishTime'];
//	echo $newFinished;
	
	
/*	echo $newFinished."<br/>";
	echo $spDate."<br/>";
	echo $spTime."<br/>";
	echo $Times."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');

		$select = mysql_query("SELECT * from todolist where md5(ID)='$rowid'");
		if($row = mysql_fetch_array($select))
		{
			$oldtime=$row['FinishTime'];
			$newtime=$oldtime.$newStatus.': '.$FinishTime.'<br />';
	//		echo "old:". $oldtime.'<br />';
	//		echo "new:".$newtime;
		}
		


		$update = mysql_query("UPDATE todolist SET Status='$newStatus', FinishTime='$newtime' where md5(ID)='$rowid'");

		if(mysql_affected_rows())
		{
	         	    echo "<script language='javascript'> alert('The status has been updated successfully .') </script> ";
	         	    echo "<script language='javascript'> self.location='todolist.php'</script> ";
	        }
	        else
	        {
	        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
	           	    echo "<script language='javascript'> self.location='todolist.php'</script> ";

	        }

   	mysql_close($con); 

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>