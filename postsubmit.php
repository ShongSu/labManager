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

//	echo $name.'<br />';
	$postcontent=$_POST['postcontent'];
//	echo $postcontent;
	$dates=date('Y-m-d H:i:s');
	$posttitle=$_POST['title'];

//	echo "rowcomment:".$rowcomment."<br />";
//	echo "newcomment:".$newcomment."<br />";
//	echo "fbyear:".$fbyear."<br />";
//	echo "fbweek:".$fbweek."<br />";
//	echo "fbname:".$fbname."<br />";
//	if($rowcomment!='')
//	{
//		$comment=$rowcomment."<br />".$newcomment;
//		echo 'feedback1:'.$feedback."<br />";

//	}
//	else 
//	{
//		$comment=$newcomment;
//		echo 'feedback2:'.$feedback."<br />";
//	}
	$posttitle=mysql_escape_string($posttitle);
	$postcontent=mysql_escape_string($postcontent);
	
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
	$update = mysql_query("INSERT INTO post (DateTime, Name, Title, Content) VALUES ('$dates','$name','$posttitle','$postcontent')");
	if(mysql_affected_rows())
	{
         //	    include('conn.php');
         	    echo "<script language='javascript'> alert('Your message has been posted successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='index.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('posted failed.') </script> ";
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