<?php
			include('../conn.php');
			$id=$_GET['id'];
			$result = mysql_query("select * from gallery where ID=$id");
			while($row = mysql_fetch_array($result))
			{	
				$id=$row['ID'];
				$Title=$row['Title'];
				$Description=$row['Description'];
				$Datetimes=$row['DateTime'];
				$url="photos/".$id.".jpg";
				$thumburl="thumbnails/".$id."-thumb.jpg";
				echo"<img src='$url' alt='$Title' height=100%/>";
			}
		    mysql_close($con);


?>
