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

<?php
	$rowDates=$_POST['Date'];
	$rowWorkPrst1=$_POST['WorkPrst1'];
	$rowWorkPrst2=$_POST['WorkPrst2'];
	$rowJnoPrstWorkshop1=$_POST['JnoPrstWorkshop1'];
	$rowJnoPrstWorkshop2=$_POST['JnoPrstWorkshop2'];
//	echo 	$rowWorkPrst2."<br />";
//	echo 	$rowJnoPrstWorkshop2."<br />";
	$rowVenue=$_POST['Venue'];
	$rowStartTime=$_POST['StartTime'];
	$rowEndTime=$_POST['EndTime'];
	if($rowWorkPrst2!="NA")
		$rowWorkPrst1=$rowWorkPrst1." / ". $rowWorkPrst2;
	if($rowJnoPrstWorkshop2!="NA")
		$rowJnoPrstWorkshop1=$rowJnoPrstWorkshop1." / ". $rowJnoPrstWorkshop2;


//	echo 	$rowWorkPrst."<br />";
//	echo 	$rowJnoPrstWorkshop."<br />";
//	echo 	$rowDates."<br />";
//	echo 	$rowWorkPrst1."<br />";
//	echo 	$rowWorkPrst2."<br />";
//	echo 	$rowJnoPrstWorkshop1."<br />";
//	echo 	$rowJnoPrstWorkshop2."<br />";
//	echo 	$rowVenue."<br />";
//	echo 	$rowStartTime."<br />";
//	echo 	$rowEndTime."<br />";
?>



 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
<?php

	include('conn.php');
	$insert = mysql_query("INSERT INTO meeting (Date, WorkPrst, JnoPrstWorkshop, Venue, StartTime, EndTime) VALUES ('$rowDates', '$rowWorkPrst1', '$rowJnoPrstWorkshop1', '$rowVenue', '$rowStartTime', '$rowEndTime')");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been inserted successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='meetingadmin.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('insert failed.') </script> ";
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