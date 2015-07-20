<?php
error_reporting(0);
ini_set("gd.jpeg_ignore_warning", 1);

session_start();
if(!isset($_SESSION['Id_User'])){
	header("Location:../personal.php?status=3");
	exit();
}

include('../conn.php');
  $userid = $_SESSION['Id_User'];
  $name = $_SESSION['username'];

//echo $name;
function img_create_small($big_img, $height, $small_img) {//原始大图地址，缩略图宽度，高度，缩略图地址
		$imgage = getimagesize($big_img); //得到原始大图片
		switch ($imgage[2]) { // 图像类型判断
		case 1:
		$im = @imagecreatefromgif($big_img);
		break;
		case 2:
		$im = @imagecreatefromjpeg($big_img);
		break;
		case 3:
		$im = @imagecreatefrompng($big_img);
		break;
		}
		$src_W = $imgage[0]; //获取大图片宽度
		$src_H = $imgage[1]; //获取大图片高度
		$width=$src_W*$height/$src_H;
		$tn = imagecreatetruecolor($width, $height); //创建缩略图
		imagecopyresampled($tn, $im, 0, 0, 0, 0, $width, $height, $src_W, $src_H); //复制图像并改变大小
		imagejpeg($tn, $small_img); //输出图像
}



?>

<?php

			include('../conn.php');
			$result = mysql_query("select * from gallery order by ID DESC limit 1");
			if($row = mysql_fetch_array($result))
			{
				$imgId=$row['ID'];
			}

			$imgId++;
			
			if ((($_FILES["file"]["type"] == "image/jpeg")
			|| ($_FILES["file"]["type"] == "image/jpeg"))
			&& ($_FILES["file"]["size"] < 4000000))
			  {
			  if ($_FILES["file"]["error"] > 0)
			    {
			    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
			    }
			  else
			    {
			    	$imgName=$imgId.".jpg";
			    $_FILES["file"]["name"] =$imgName;
		//	    echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//	    echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//	    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//	    echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";




			    if (file_exists("images/" . $_FILES["file"]["name"]))
			      {
			 		     $filename=$_FILES["file"]["name"];
			        	     echo "<script language='javascript'> alert('$filename already exists.') </script> ";
			           	    echo "<script language='javascript'> self.location='../gallery.php'</script> ";
			      }
			    else
			      {
			      move_uploaded_file($_FILES["file"]["tmp_name"],
			      "photos/" . $_FILES["file"]["name"]);
				$tempname=$_FILES["file"]["name"];
				$oldpath="photos/".$tempname;
				$newpath="thumbnails/".$imgId."-thumb.jpg";
//				echo $newpath;
//				img_create_small($oldpath, 500, 300, $oldpath); 
				img_create_small($oldpath, 75, $newpath); 

//			      echo "Stored in: " . "images/" . $_FILES["file"]["name"];
			      $datetimes=date('Y-m-d');
			      $title=$_POST['title'];
			      $Description=$_POST['Description'];
			      $insert = mysql_query("INSERT INTO gallery(ID,Name, DateTime, Title,Description, url) VALUES ($imgId,'$name','$datetimes','$title','$Description','$imgName')");
				if(mysql_affected_rows())
				{
			         	    echo "<script language='javascript'> alert('The record has been inserted successfully .') </script> ";
			         	    echo "<script language='javascript'> self.location='../gallery.php'</script> ";
			        }
			        else
			        {
			        	     echo "<script language='javascript'> alert('insert failed.') </script> ";
			           	    echo "<script language='javascript'> self.location='../gallery.php'</script> ";

			        }


			      }
			    }
			  }
			else
			  {
			  echo "Invalid file";
			  }
			    mysql_close($con);

?>