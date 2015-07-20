<?php
      $con = mysql_connect("localhost","root","chen");
	if (!$con)
		{
		 	 die('Could not connect: ' . mysql_error());
		 }

	mysql_select_db("lab_data", $con);
	     
	     
	  $db = new mysqli("localhost", "root", "chen", "lab_data");

	?>