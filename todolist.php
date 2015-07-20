
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



<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><span>Figeys' Lab</span> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
           <li><a href="personal.php?action=logout">Log Out</a> </li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize" >
      <div class="mainbar"  style='width:96%'>

        <div class="article">
          <h2><span>My To Do List</span></h2><div class="clr"></div>
	         <div class="login">



<div>
<a href='taskcreate.php'>Create New Task</a> 
(<a href='personal.php'>Back</a>)<br />

<br />

<?php
			$result = mysql_query("select * from todolist where Owner='$name' order by status ASC, setupdate DESC");
			
 			 	echo "<fieldset style='width:96%'>";
				echo  "<legend style='font-size:14px;'>". "My Tasks" . "</legend>";
				echo "<br />";

				echo "<table id='schedule'>
				<tr>
				<th>Task</th>
				<th>Project</th>
				<th>Created by</th>
				<th>Comment</th>
				<th>Status</th>
				<th>Operations</th>
				<td>Edit</td>
				</tr>";

	 		while($row = mysql_fetch_array($result))
			  {
				  $rowid=md5($row['ID']);
				   echo "<tr>";
				  echo "<td>" . $row['Content'] . "</td>";
				  echo "<td>" . $row['Project'] . "</td>";
				  echo "<td>" . $row['Createdby'] . "</td>";
				  echo "<td>" . $row['Comment'] . "</td>";
				  echo "<td>" . $row['Status'] . "</td>";
				  echo "<td>" . $row['FinishTime'] . "</td>";
				  echo "<td><a href='taskedit.php?id=$rowid'>Edit</a></td>";
				  echo "</tr>";

			}
				echo "</table>";
				echo "<br />";
				echo "</fieldset>";


			mysql_close($con);
?>				


</div>


	<br />


	        </div>
         </div>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="fbg">
  </div>
  <div class="footer">
    <div class="footer_resize">
      <p class="lf">Copyright © <a href="#">2014 OISB</a>. All rights reserved.</p>
      <ul class="fmenu">
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">My Lab</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
