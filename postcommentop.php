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


//echo $name;

?>

</head>
	
	
<body>




 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
<?php

	$rowid=$_POST['id'];
	
	$rowcomment=$_POST['oldcomment'];
	$newcomment=$_POST['addcomment'];
	$newcomment="<strong>".$name.": </strong>".$newcomment;
	
	

//	echo "rowcomment:".$rowcomment."<br />";
//	echo "newcomment:".$newcomment."<br />";
//	echo "fbyear:".$fbyear."<br />";
//	echo "fbweek:".$fbweek."<br />";
//	echo "fbname:".$fbname."<br />";
	if($rowcomment!='')
	{
		$comment=$rowcomment."<br />".$newcomment;
//		echo 'feedback1:'.$feedback."<br />";

	}
	else 
	{
		$comment=$newcomment;
//		echo 'feedback2:'.$feedback."<br />";
	}
	$comment=mysql_escape_string($comment);
	
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
	$update = mysql_query("UPDATE post SET Comment='$comment' WHERE Id_P=$rowid");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The comment has been added successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='index.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('commented failed.') </script> ";
           	    echo "<script language='javascript'> self.location='index.php'</script> ";

        }

   	mysql_close($con);#*/

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>