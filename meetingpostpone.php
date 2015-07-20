<html>
<head>
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

$power = mysql_query("select * from users where Name='$name' and Meeting=1");
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
	include('conn.php');
	$rowid=$_GET['ID'];
//	echo $rowid."<br />";
	$select = mysql_query("select * from meeting where Id_M=$rowid");
	$rows = mysql_fetch_array($select);
	$rowdate=$rows['Date'];
//	echo $rowdate;
/*	echo $rowdate."<br/>";
	echo $newDates."<br/>";
	echo $newWorkPrst."<br/>";
	echo $newJnoPrstWorkshop."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	$update = mysql_query("UPDATE `meeting` SET DATE =  DATE_ADD(Date,INTERVAL 7 DAY)  WHERE DATE>='$rowdate'");
	if(mysql_affected_rows())
	{
        	    echo "<script language='javascript'> alert('The record has been postponed successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='meetingadmin.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('postponed failed.') </script> ";
          	    echo "<script language='javascript'> self.location='meetingadmin.php'</script> ";

        }

   	mysql_close($con);

	?>









	


				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>