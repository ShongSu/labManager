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
	$rowtype=$_POST['rowtype'];
	$rowid=$_POST['rowid'];
	
//	echo $rowtype."<br />";
//	echo $rowid;
	switch($rowtype)
	{
		case antibodies:
			$ID='An_Id';break;
		case vectors:
			$ID='Vec_Id';break;
		case chemical:
			$ID='Ch_Id';break;
		case SILAC :
			$ID='Si_Id';break;
	}




	include('conn.php');
	$deletes = mysql_query("DELETE FROM $rowtype WHERE $ID='$rowid'");
	if(mysql_affected_rows())
	{
        	    echo "<script language='javascript'> alert('The record has been deleted successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='recourcesadmin.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('delete failed.') </script> ";
           	    echo "<script language='javascript'> self.location='recourcesadmin.php'</script> ";

        }

   	mysql_close($con);

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>