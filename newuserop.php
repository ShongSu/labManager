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

$power = mysql_query("select * from users where Name='$name' and Human=1");
if(!mysql_num_rows($power)){
	header("Location:personal.php");
	exit();
}

//echo $name;

?>

</head>
	
	
<body>

<?php
	$rowName=$_POST['Name'];
	$rowGender=$_POST['Gender'];
	$rowEmail=$_POST['Email'];
	$rowPassword=MD5($rowName);
?>



 <div class="content">
 	<div class="content_resize">
    	 	<div class="mainbar">	
     		<p class="meeting"> 
<?php

	include('conn.php');
	$insert = mysql_query("INSERT INTO Users(`Id_User`, `Name`, `Gender`, `Email`, `Paswd`) VALUES ('$rowName', '$rowName','$rowGender', '$rowEmail', '$rowPassword')");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been inserted successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='human.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('insert failed.') </script> ";
           	    echo "<script language='javascript'> self.location='human.php'</script> ";

        }

   	mysql_close($con);

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>