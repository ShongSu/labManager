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

$power = mysql_query("select * from users where Name='$name' and Task=1");
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
	$rowfeedback=$_POST['oldfeedback'];
//	echo "rowfeedback:".$rowfeedback."<br />";
	$newfeedback=$_POST['newfeedback'];
	$newfeedback="<strong>".$name.":</strong> ".$newfeedback;
	$rowid=$_POST['rowid'];
//	echo "rowfeedback:".$rowfeedback."<br />";
//	echo "newfeedback:".$newfeedback."<br />";
//	echo "fbyear:".$fbyear."<br />";
//	echo "fbweek:".$fbweek."<br />";
//	echo "fbname:".$fbname."<br />";
	if($rowfeedback!='')
	{
		$feedback=$rowfeedback."<br />".$newfeedback;
//		echo 'feedback1:'.$feedback."<br />";

	}
	else 
	{
		$feedback=$newfeedback;
//		echo 'feedback2:'.$feedback."<br />";
	}
	$feedback=mysql_escape_string($feedback);
//	echo "feedback:".$feedback."<br />";
	
/*	echo $rowdate."<br/>";
	echo $newDates."<br/>";
	echo $newWorkPrst."<br/>";
	echo $newJnoPrstWorkshop."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');
	$update = mysql_query("UPDATE todolist SET Comment='$feedback' WHERE MD5(ID)='$rowid'");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The feedback has been added successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='assign.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
           	    echo "<script language='javascript'> self.location='assign.php'</script> ";

        }

   	mysql_close($con);#*/

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>