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

$power = mysql_query("select * from users where Name='$name' and Human=1");
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
	$rowid=$_POST['rowid'];
	$newName=$_POST['Name'];
	$newGender=$_POST['Gender'];
	$newEmail=$_POST['Email'];
	$newMeeting=$_POST['Meeting'];
	$newRecources=$_POST['Recources'];
	$newMS=$_POST['MS'];
	$newReport=$_POST['Report'];
	$newFridge=$_POST['Fridge'];
	$newHuman=$_POST['Human'];
	$newTask=$_POST['Task'];

/*	echo $rowid."<br/>";

	echo $newName."<br/>";
	echo $newGender."<br/>";
	echo $newEmail."<br/>";
	echo $newMeeting."<br/>";
	echo $newRecources."<br/>";
	echo $newMS."<br/>";
	echo $newReport."<br/>";
	echo $newFridge."<br/>";
	echo $newHuman."<br/>";   */

	include('conn.php');
	$update = mysql_query("UPDATE users SET Name='$newName', Gender ='$newGender', Email ='$newEmail', Meeting ='$newMeeting', Recources ='$newRecources', MS ='$newMS', Report='$newReport' , Fridge='$newFridge' , Human='$newHuman',  Task='$newTask' WHERE Id_User='$rowid'");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been updated successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='human.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
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