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

	$updatetime=date('Y-m-d H:i:s') ; 
	
	$note=$_POST['notepad'];
	
	

	$note=mysql_escape_string($note);
	
//	echo "New:".$comment;
//	echo "feedback:".$feedback."<br />";
	
/*	echo $rowdate."<br/>";
	echo $newDates."<br/>";
	echo $newWorkPrst."<br/>";
	echo $newJnoPrstWorkshop."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');
	$update = mysql_query("UPDATE notepad SET Note='$note', Updated='$updatetime' WHERE Name='$name'");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The note has been added successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='personal.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
           	    echo "<script language='javascript'> self.location='personal.php'</script> ";

        }

   	mysql_close($con);#*/

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>