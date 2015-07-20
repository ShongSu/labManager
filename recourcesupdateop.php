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
	

	
//	echo $rowtype."<br/>";
//	echo $rowid."<br/>";
/*	echo $newWorkPrst."<br/>";
	echo $newJnoPrstWorkshop."<br/>";
	echo $newVenue."<br/>";
	echo $newStartTime."<br/>";
	echo $newEndTime."<br/>";*/

	include('conn.php');
	switch($rowtype)
	{
		case antibodies:
			$newName=$_POST['Name'];
			$newSpecies=$_POST['Species'];
			$newLocation=$_POST['Location'];
			$newCompany=$_POST['Company'];
			$newProduct=$_POST['Product'];
			$newWebsite=$_POST['Website'];
//			echo $newName."<br>";
//			echo $newSpecies."<br>";
//			echo $newLocation."<br>";
//			echo $newCompany."<br>";
//			echo $newProduct."<br>";
//			echo $newWebsite."<br>";
			
			$sentence="UPDATE antibodies SET Name ='$newName', Species='$newSpecies',Location='$newLocation', Company ='$newCompany', Product ='$newProduct', Website ='$newWebsite'  WHERE An_Id=$rowid";
			break;
	
		case vectors:
			$newName=$_POST['Name'];
			$newSource=$_POST['Source'];
			$newSequence=$_POST['Sequence'];
			$newLocation=$_POST['Location'];
			$newLink=$_POST['Link'];
//			echo $newName."<br>";
//			echo $newSource."<br>";
//			echo $newSequence."<br>";
//			echo $newLocation."<br>";
//			echo $newLink."<br>";

			$sentence="UPDATE  vectors  SET  Name ='$newName',  Source ='$newSource', Sequence ='$newSequence', Link ='$newLink', Location ='$newLocation' WHERE Vec_Id=$rowid";
			break;
		
		case chemical: 
			$newName=$_POST['Name'];
			$newNumber=$_POST['Number'];
			$newLocation=$_POST['Location'];
///			echo $newName."<br>";
//			echo $newNumber."<br>";
//			echo $newLocation."<br>";
	
			$sentence="UPDATE  chemical  SET Name = '$newName', Number = '$newNumber', Location = '$newLocation' WHERE Ch_Id=$rowid";
			break;

			case SILAC:
				$newName=$_POST['Name'];
				$newOrganism=$_POST['Organism'];
				$newTissue=$_POST['Tissue'];
				$newType=$_POST['Type'];
				$newKeeper=$_POST['Keeper'];
				$newLocation=$_POST['Location'];
//				echo $newName."<br>";
//				echo $newOrganism."<br>";
//				echo $newTissue."<br>";
//				echo $newType."<br>";
//				echo $newKeeper."<br>";
//				echo $newLocation."<br>";
				$sentence="UPDATE  silac  SET Name ='$newName' ,Organism='$newOrganism',Tissue='$newTissue',Type='$newType',Keeper='$newKeeper', Location='$newLocation' WHERE Si_Id=$rowid";
				break;
	
	}
	
	$update = mysql_query($sentence);
	if(mysql_affected_rows())
	{
        	    echo "<script language='javascript'> alert('The record has been updated successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='recourcesadmin.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
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