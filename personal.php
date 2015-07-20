<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Welcome to Figeys' Lab</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/arial.js"></script>
<script type="text/javascript" src="js/cuf_run.js"></script>
<!-- CuFon ends -->
<script language=JavaScript>
<!--

function InputCheck(LoginForm)
{
  if (LoginForm.username.value == "")
  {
    alert("Please input your ID!");
    LoginForm.username.focus();
    return (false);
  }
  if (LoginForm.password.value == "")
  {
    alert("Please input your password!");
    LoginForm.password.focus();
    return (false);
  }
}

//-->
</script>

<?php
	error_reporting(0);
         function LoginDiag()
		{
         	echo	'<fieldset>
			<legend>Login</legend>
			<form name="LoginForm" method="post" action=""  onSubmit="return InputCheck(this)">
			<p>
			<label for="username" class="label">User ID:</label>
			<input id="username" name="username" type="text" class="input" />
			<p/>
			<p>
			<label for="password" class="label">Password:</label>
			<input id="password" name="password" type="password" class="input" />
			<p/>
			<p>
			<input type="submit" name="submit"  value=" Log In " class="left" />
			<a href="passwordrefind.php" target="_blank">
			<input type="button" name="pswrefind"  value=" Forget Password? " class="left" />
			</a>
			</p>
			</form>
		</fieldset>	
		<br />';
		}
	
	function LoginInfo()
	{
		
	  echo'<fieldset style="width:70%">
	  
	  <legend>Welcome</legend> 
	  <dl>
	  <dt>Welcome back <strong>';
          echo $_SESSION['username'];
          echo '!</strong> </dt>'; 
	  echo '<dt>Your Registered Email address is: '.$_SESSION["useremail"].'</dt>
	  <dt>  The system will use this email address for your password retrival </dt>
		<dt><a href="change.php" target="_blank">Change password</a>;  <a href="personal.php?action=logout">Log Out</a></dt>
		
	  	</dl>
	 </fieldset>';
	  
	}
	
	function LoginMene()
	{
	echo '
	  <fieldset style="width:70%">
	  
	  <legend>My Dry Lab</legend> 
	  
	  <strong>Contact</strong>     
		  
		  <li><a href="contact.php">Contact List</a></il>
	  <li><a href="mycontact.php">My Info</a></il>
	 		 <br>
	<br>
	  <strong>Weekly Report</strong>  
	 		<li> <a href="report.php" >Submit my Report</a></li>
     		<li> <a href="myreport.php"> View my report history</a></li>
			<li> <a href="notepad.php"> Notepad for workreport</a></li>
      <br>
	  <strong>Mass Spectrometry</strong>     
		  
		  <li><a href="msbooking.php">MS Booking</a></il>
		  <li><a href="myms.php"> Manage my MS bookings</a></li>
		  
	<br>
	<strong>Order Request</strong>
	  
          <li><a href="productorder.php">Application Form</a></li>
          <li><a href="myApplication.php">My Application</a></li>

	 <br>

	 <strong>Lab Duty</strong>
	  
          <li><a href="dutytable.php">Lab Duty Table</a></li>
      	  <li><a href="duty.php">All lab duties can be found Here</a></li>
	 <br>
	 <strong>Lab BBS</strong>	 
       	   <li><a href="fullpost.php">Latest News</a></li>
          <li><a href="post.php">Make a new Post</a></li>
	<br>	  
	 <strong>Lab Gallery</strong>	  
		  
          <li><a href="gallery/mygallery.php">My Gallery </a></li>
		  <li><a href="gallery.php">Latest Post </a></li>
		  <li><a href="gallery/allgallery.php">Full Gallery </a></li>
		  <li><a href="gallery/imgpost.php">Post a Picture</a></li>
	<br>	   
	<strong>Lab Traing/SOP/Tutorial</strong>	  
		   
           <li><a href="sops.php">Lab tutorial and SOPs</a></li>
    <br>     
	<strong>TODO list</strong>		 
		   <li><a href="todolist.php">Setup a new task</a></li>
		   <li><a href="todolist.php">All Tasks</a></li>
           
        </fieldset>

';

	}

	
	
	function optMenuDisplay()
	{
		include('conn.php');
//		$username = htmlspecialchars($_POST['username']);
//		$password = MD5(htmlspecialchars($_POST['password']));
		$username=$_SESSION['username'];
		$check_query = mysql_query("select * from users where Id_User='$username'  limit 1");
		if($row = mysql_fetch_array($check_query)){
			
		//登录成功

			if($row['Meeting']||$row['Recources']||$row['MS']||$row['Report']||$row['Fridge']||$row['Human'])
			{	
				echo "<br />";
				echo '<fieldset style="width:70%">
	
				<legend>Lab Management</legend>';

				echo "<dl>";
				if($row['Meeting'])
				{
					echo "<dt><a href='meetingadmin.php' >Lab Meeting Scheduling</a></dt>";
				} 
				if($row['Recources'])
				{
					
					echo "<dt><a href='recourcesadmin.php'>Lab Resources Updating</a></dt>";
					echo "<dt><a href='labdutymanage.php' >Lab duties </a> / <a href='tcdutymanage.php'>TC duties </a> management</dt>";
					echo "<dt><a href='ordermanage.php' >Product Order Management </a></dt>";


				}
				if($row['MS'])
				{
					echo "<dt><a href='msadmin.php'>MS Utilization</a> </dt>
					<dt><a href='msabadmin.php'>MS Status</a></dt>";
				}
				if($row['Report'])
				{
					echo "<dt><a href='reportviewadmin.php'>Work Report Management</a></dt>";
				}
				if($row['Fridge'])
				{
					echo "<dt><a href='fridgeadmin.php'>Fridge/Freezer Deployment</a></dt>";
				}
				if($row['Human'])
				{
					echo "<dt><a href='human.php' >User authority assignment</a></dt>";

				}
				if($row['Task'])
				{
					echo "<dt><a href='assign.php' >Tasks/TODO list Managing </a></dt>";
				}

				echo "</dl>";
				echo "</fieldset>";
			}
		}
}

	
	function dutyRemander()
	{
		include('conn.php');
		echo "<br />";

//		$username = htmlspecialchars($_POST['username']);
//		$password = MD5(htmlspecialchars($_POST['password']));
		$username=$_SESSION['username'];
		$currentweek=date('W');
		$currentyear=date('Y');
		echo '<fieldset style="width:70%">
			<legend>Lab Duty this week</legend>';
	
		$check_query = mysql_query("select * from labduty where Year=$currentyear and week = $currentweek limit 1");
		if($row = mysql_fetch_array($check_query)){
			
			if($row['AD_Duty']==$username)
			{	
				echo "Your duty is Autoclaving Dishes. <br />";
			}
			if($row['CB_Duty']==$username)
			{	
				echo "Your duty is Changing Biohazard bags and dropping off. <br />";
			}
			if($row['RC_Duty']==$username)
			{	
				echo "Your duty is Regular Cleanin. <br />";
			}
			if($row['PM_Duty']==$username)
			{	
				echo "Your duty is pH meter. <br />";
			}
			if($row['F_Duty']==$username)
			{	
				echo "Your duty is -80 Freezer. <br />";
			}
			if($row['LR_Duty']==$username)
			{	
				echo "Your duty is Lab Restocking. <br />";
			}

			
			
		}
			else {
			echo "No lab duty scheduled this week. <br />";
			}
			
		$check_query2 = mysql_query("select * from tcduty where Year=$currentyear and week = $currentweek limit 1");
		if($row2 = mysql_fetch_array($check_query2)){
			
			if($row2['BB_Duty']==$username)
			{	
				echo "Your tc duty is Biohazard bags. <br />";
			}
			if($row2['SC_Duty']==$username)
			{	
				echo "Your tc duty is Sharps Container. <br />";
			}
			if($row2['RP_Duty']==$username)
			{	
				echo "Your tc duty is Restocking pipets. <br />";
			}
			if($row2['DA_Duty']==$username)
			{	
				echo "Your tc duty is Decontamination of Aspirator. <br />";
			}
			
		}
			else {
			echo "No tc duty scheduled this week.";
			}


		echo "</fieldset>";
		echo "<br />";
}


		?>


</head>
<body>
<?php
	session_start();
//start_session(2);

	//注销登录
	if(isset($_GET['action']) && $_GET['action'] == "logout"){
		unset($_SESSION['Id_User']);
		unset($_SESSION['username']);
  	//	echo "<script language='javascript'> alert('Log out successfully!') </script> ";
		header("personal.php");
	}

	//登录
	if(isset($_POST['submit'])){
	
	$username = htmlspecialchars($_POST['username']);
	$password = MD5(htmlspecialchars($_POST['password']));
	//包含数据库连接文件
	include('conn.php');
	//检测用户名及密码是否正确
	$check_query = mysql_query("select * from users where Id_User='$username' and Paswd='$password' limit 1");
	if($result = mysql_fetch_array($check_query)){

		
	
		//登录成功
		$_SESSION['Id_User'] = $username;
		$resultname=$result['Name'];
		$resultemail=$result['Email'];
		$_SESSION['username'] = $resultname;
		$_SESSION['useremail'] = $resultemail;
		
		$status=$_GET['status'];
		$id=$_GET['id'];

		switch($status)
		{
			case 1: {
			header("location: postcomment.php?id=$id");
   				   break;
			}
			case 2: {
			header("location: post.php");
   				   break;
			}
			case 3: {
			header("location: gallery/imgpost.php");
   				   break;
			}

			case 4: {
			header("location: gallery/imgcomment.php?id=$id");
   				   break;
			}
			default: {
			header("location: personal.php");break;
			}
		}

	//	exit;

	} else {
  		echo "<script language='javascript'> alert('Your User ID or Password is incorrect, Please try again.') </script> ";
	}
	}

?>



<div class="main">

  <div class="header">
    <div class="header_resize">
      <div class="logo"><h1><a href="index.php"><span>Intraweb of Figeys' Lab</span></a><small>Ask me about Proteomics</small></a></h1></div>
      <div class="clr"></div>
    
      <div class="menu_nav">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="workshop.html">Resources</a></li>
          <?php
          	if(!isset($_SESSION['Id_User'])){	
			echo " <li class='active'><a href='personal.php'>Log In</a></li>";
					    }
			else{
			echo " <li class='active'><a href='personal.php'>My Lab</a></li>";
					  }
		?>
          <li><a href="tools.html">Tools</a></li>
          <li><a href="about.html">Quick Links</a></li>
          <li><a href="gallery.php">Gallery</a></li>
          <?php
          	if(!isset($_SESSION['Id_User'])){	
					    }
			else{
			echo "  <li><a href='personal.php?action=logout'>Log Out</a> </li>";
					  }
		?>
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
	            <?php 
			if(!isset($_SESSION['Id_User'])){
				LoginDiag(); 
			}
			else {
				LoginInfo();
				dutyRemander();
				LoginMene();
				optMenuDisplay();
			}

	            
	            
	            ?>
	        </div>
         </div>
      </div>
      <div class="sidebar">
        <div class="gadget">
          <h2 class="star">Navigation</h2><div class="clr"></div>
          <ul class="sb_menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="workshop.html">Resources</a></li>
            <li><a href="personal.php">My Lab</a></li>
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
      <p class="lf">Copyright © <a href="#">2014</a>. All rights reserved.</p>
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
