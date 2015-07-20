
<html>
<head>
<title>Reset your password</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />	
<link href="style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
    html{font-size:14px;}
	fieldset{width:520px; margin: 0 auto;}
	legend{font-weight:bold; font-size:16px;}
	label{float:left; width:100px; margin-left:10px;}
	.left{margin-left:80px;}
	.input{width:200px;}

  </style>
  
<script language='javascript'>
    function checkpost() {


     if(myform.npwd.value=='') {
      alert('Please input your new password!');
      myform.name.focus();
      return false;
      }
     if(myform.npwd1.value=='') {
      alert('Please verify your password!');
      myform.npwd1.focus();
      return false;
      }
}
</script>

<?php
		error_reporting(0);
		include('conn.php');
	    	$id = $_GET['id'];

		if($_POST['submit']) {
			$npwd=($_POST['newpwd']);
			$npwd1=($_POST['newpwd1']);
//			echo $npwd;
//			echo "<br />";
//			echo $npwd1;

  			if($npwd==$npwd1) {
			
				$npwd=MD5(($_POST['newpwd']));
				$npwd1=MD5(($_POST['newpwd']));
				$id = $_GET['id'];
     			$stmt = $db->prepare("UPDATE users SET Paswd=? WHERE hash=?");
				$stmt->bind_param('ss', $npwd, $id);
				$stmt->execute();
				
				$ha= md5(uniqid(rand(),1));
			    	$id = $_GET['id'];
//			    	echo $id;
//			    	echo "<br />";
//			    	echo $ha;
				
	
				$result = mysql_query("UPDATE users SET hash='$ha' WHERE hash='$id'");
//				echo $ha;
//				echo '<br>';
//				echo $id;

				if($stmt->affected_rows)
				{
//				echo "good";
         	    		echo "<script language='javascript'> alert('Your password has been changed successfully .') </script> ";
				}
				else 
				{
         	    		echo "<script language='javascript'> alert('Error,the link has expired!') </script> ";
				}
			}
			else {
				echo "<script language='javascript'> alert('The passwords you entered must be the same, please try again.') </script> ";
			}
		   }
 
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
          <li class="active"><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">About Us</a></li>
        </ul>
      </div>
      <div class="clr"></div>
    </div>
  </div>

  <div class="content">
    <div class="content_resize">
      <div class="mainbar">
       
        <div class="article">
          <h2><span></span></h2><div class="clr"></div>
	         <div class="login">

	<div>
		<fieldset>
		<legend>Reset your password</legend>
		<form method='post' name='myform' action='#'  onsubmit='return checkpost();'>
		<label for="newpwd" class="label">New:</label>
		<input type='password' name='newpwd'><br />
			
		<label for="newpwd" class="label">Confirm:</label>
		<input type='password' name='newpwd1'><br/>



		<br/>&nbsp;&nbsp;
		&nbsp;&nbsp;<input type='submit' name='submit' value='Submit'>
		&nbsp;&nbsp;<input type='reset' name='reset' value='Reset'>
		&nbsp;&nbsp;<a href="javascript:window.close()"><input type='button' name='cancel' value='Cancel'></a><br />
		</form>
		</fieldset>
</div>
					





			<br />


	        </div>
         </div>
      </div>
      <div class="sidebar">
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
          <li class="active"><a href="personal.php">Login</a></li>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">About Us</a></li>
      </ul>
      <div class="clr"></div>
    </div>
  </div>
</div>
</body>
</html>












