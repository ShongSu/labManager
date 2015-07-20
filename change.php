
<html>
<head>
<title>Welcome to Figeys' Lab</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<script language='javascript'>
    function checkpost() {

     if(myform.pwd.value=='') {
      alert('Please input your current password!');
      myform.pwd.focus();
      return false;
      }
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
session_start();
if(!isset($_SESSION['Id_User'])){
	header("Location:personal.html");
	exit();
}

include('conn.php');
  $userid = $_SESSION['Id_User'];
  $name = $_SESSION['username'];

//echo $name;

if($_POST[submit]) {
$pwd=MD5(($_POST[pwd]));
$npwd=MD5(($_POST[npwd]));
$npwd1=MD5(($_POST[npwd1]));

   $sql="select * from users where Id_User='$userid' and Paswd='$pwd'";
   $r=mysql_query($sql);
   if(mysql_num_rows($r)>0) {
  
    if($npwd==$npwd1) {
     $sql1="update users set Paswd='$npwd' where Id_User='$userid' and Paswd='$pwd'";
     mysql_query($sql1); 
         	    echo "<script language='javascript'> alert('Your password has been changed successfully .') </script> ";
         	    echo "<script language='javascript'> window.close()</script> ";

     }
    else {
    	    echo "<script language='javascript'> alert('The passwords you entered must be the same, please try again.') </script> ";

      }
   }
   else {
    echo "<script language='javascript'> alert('Wrong original password, please try again.') </script> ";
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
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
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
          <p><strong></strong></p>
	         <div class="login">

<div>
<fieldset>
<legend>Change password</legend>
<form method='post' name='myform' action='#'  onsubmit='return checkpost();'>

<!--<label for="id" class="label">User id:</label>
<?php  echo $userid; ?> <br /> -->
<label for="name" class="label">User name:</label>
<?php  echo $name; ?> <br /> <br />


<label for="current" class="label">Current:</label>
<input type='password' name='pwd'><br />

<label for="newpwd" class="label">New:</label>
<input type='password' name='npwd'><br />
	
<label for="newpwd" class="label">Confirm:</label>
<input type='password' name='npwd1'><br/>

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
        <div class="gadget">
          <h2 class="star"><span>Sidebar</span> Menu</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="workshop.html">Resources</a></li>
            <li><a href="personal.php">Login</a></li>
            <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>

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
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <li class="active"><a href="personal.php">Login</a></li>
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
