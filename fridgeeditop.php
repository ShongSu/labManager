<html>
<head>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<link href="tab.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/tab.js"></script>


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

$power = mysql_query("select * from users where Name='$name' and Fridge=1");
if(!mysql_num_rows($power)){
	header("Location:login.php");
	exit();
}

//echo $name;

?>

</head>
	
<body>
<?php
	$rowid=$_POST['rowid'];
	$rowlist=$_POST['rowlist'];
	$newdata=$_POST['Grid'];
	
//	echo $rowid."<br />";
//	echo $rowlist."<br />";
//	echo $newdata;
	
/*	echo $rowdate."<br/>";
	echo $newDates."<br/>";
	echo $newWorkPrst."<br/>";
	echo $newJnoPrstWorkshop."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');
	$update = mysql_query("UPDATE fridge SET $rowlist= '$newdata' WHERE F_Id=$rowid");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been updated successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='fridgeadmin.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
           	    echo "<script language='javascript'> self.location='fridgeadmin.php'</script> ";

        }

   	mysql_close($con);

	?>





</body>

	
</html>