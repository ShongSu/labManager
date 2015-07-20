<html>
<head>
<title>Welcome to Figeys' Lab</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    html{font-size:14px;}
	fieldset{width:520px; margin: 0 auto;}
	legend{font-weight:bold; font-size:16px;}
	label{float:left; width:100px; margin-left:10px;}
	.left{margin-left:80px;}
	.input{width:150px;}

  </style>

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
			  
			  $rowName=$_SESSION['username'];
			  $rowEmail=$_POST['Email'];
		         $rowPhone=$_POST['Phone'];
			  $rowExtention=$_POST['Extention'];
			  $rowRoom= $_POST['Room'] ;
			  $rowBirthday=$_POST['Birthday'];
			  $rowDisplay=$_POST['Display'] ;

/*	echo $rowName."<br/>";
	echo $rowEmail."<br/>";
	echo $rowPhone."<br/>";
	echo $rowExtention."<br/>";
	echo $rowRoom."<br/>";
	echo $rowDisplay."<br/>";
	echo $rowBirthday."<br/>";*/

	include('conn.php');
	$update = mysql_query("UPDATE users SET  Email ='$rowEmail', Phone='$rowPhone', Extention='$rowExtention', Room='$rowRoom', Birthday='$rowBirthday', Display='$rowDisplay'  WHERE Name='$rowName'");
	if(mysql_affected_rows())
	{
         	    echo "<script language='javascript'> alert('The record has been updated successfully .') </script> ";
         	    echo "<script language='javascript'> self.location='contact.php'</script> ";
        }
        else
        {
        	     echo "<script language='javascript'> alert('updated failed.') </script> ";
           	    echo "<script language='javascript'> self.location='mycontact.php'</script> ";

        }

   	mysql_close($con);

	?>

				</p> 
			 </div>
      	</div>
      </div>

		




</body>
</html>