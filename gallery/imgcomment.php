
<html>
<head>
<title>Comment</title>
<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon" />	
<link href="../style.css" rel="stylesheet" type="text/css" />

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
	header("Location:../personal.php?status=4");
	exit();
}

include('../conn.php');
  $userid = $_SESSION['Id_User'];
  $name = $_SESSION['username'];

//echo $name;

?>

</head>
<body>



<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="../index.php"><span>Figeys' Lab</span></a> <a href="http://www.oisb.ca/" target="_blank"> <small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="../index.php">Home</a></li>
          <li><a href="../workshop.html">Resources</a></li>
          <li><a href="../personal.php">My Lab</a></li>
          <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li class="active"><a href="../gallery.php">Gallery</a></li>
  		<li><a href='../personal.php?action=logout'>Log Out</a> </li>
          </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span>Comment</span></h2><div class="clr"></div>
	         <div class="login">

	<?php
			include('../conn.php');
			$id=$_GET['id'];
			$result = mysql_query("select * from gallery where ID=$id");
			while($row = mysql_fetch_array($result))
			{
					  echo  $row['DateTime'].", ".$row['Name'].":<br />";
					  echo "<strong>Title: ".$row['Title']."</strong> <br />";
     		  	        $imgName=$row['url'];
     		  	        $imgLinks='photos/'.$imgName;
					  echo "<img width='100%' src='$imgLinks' /><br />";
					  echo "<br />";
					  $oldcomment=$row['Comment'];
					  echo "".$row['Comment']."<br />";
			}
			mysql_close($con);

	
	?>
	
	<form method='post' name='commentform' action='imgcommentop.php'  >
		<textarea name='addcomment' rows="6" cols="50" required="required" placeholder="Add your comment here."></textarea>
		<?php  echo "<input type='hidden' name='id' value ='$id' />"  ;
		 echo "<input type='hidden' name='oldcomment' value ='$oldcomment' />"  ;
		
		?>
		<p>
		&nbsp;&nbsp;<input type='submit' name='submit' value='Submit' />
		&nbsp;&nbsp;<input type='reset' name='reset' value='Reset' />
		&nbsp;&nbsp;<a href="../gallery.php"><input type='button' name='cancel' value='Cancel'></a><br />
		</p>
	</form>	


			<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="../index.php">Home</a></li>
            <li><a href="../workshop.html">Resources</a></li>
            <li><a href="../personal.php">My Lab</a></li>
            <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li><a href="../gallery.php">Gallery</a></li>

          </ul>
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
          <li><a href="../index.php">Home</a></li>
          <li><a href="../workshop.html">Resources</a></li>
          <li><a href="../personal.php">My Lab</a></li>
          <li><a href="../tools.html">Tools</a></li>
          <li><a href="../about.html">Quick Links</a></li>
          <li class="active"><a href="../gallery.php">Gallery</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>
