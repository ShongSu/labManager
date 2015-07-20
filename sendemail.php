<?php
//	error_reporting(0);
      require '\mail\class.phpmailer.php';
	include('conn.php');

	if(isset($_POST['submit'])) {
		$address=$_POST['email'];
   		$id = md5(uniqid(rand(),1));
		$result = mysql_query("select * from users where email='$address'");
		if(mysql_num_rows($result))
		{
  		$stmt = $db->prepare("UPDATE users SET hash=? WHERE email=?");
    		$stmt->bind_param('ss', $id, $address);
  		$stmt->execute();
   		$message="Dear user, Click on the following link to reset your password: 
   		<br /> <a href='http://137.122.237.102:8080/lab/passwordreset.php?id=$id'>http://137.122.237.102:8080/lab/passwordreset.php?id=$id</a>";




		$mail = new PHPMailer(true); //New instance, with exceptions enabled

	//	$body             = file_get_contents('contents.html');
	//	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	      $body		=  $message;
		$mail->IsSMTP();                           // tell the class to use SMTP
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Port       = 25;                    // set the SMTP server port
		$mail->Host       = "smtp.163.com"; // SMTP server
		$mail->Username   = "hyrnzb@163.com";     // SMTP server username
		$mail->Password   = "hyrnzb051723";            // SMTP server password



	//	$mail->IsSendmail();  // tell the class to use Sendmail

//		$mail->AddReplyTo("hyrnzb@163.com","First Last");

		$mail->From       = "hyrnzb@163.com";
		$mail->FromName   = "System of Figeys'lab";

		$to = $address;

		$mail->AddAddress($to);

		$mail->Subject  = "Password Refind";

		$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
		$mail->WordWrap   = 80; // set word wrap

		$mail->MsgHTML($body);

		$mail->IsHTML(true); // send as HTML

		$mail->Send();
		echo "<script>alert('A message has been sent to your Email, Please following it to reset your password.')</script>";
		echo "<script>	javascript:window.close();</script>";
		}
		else 
		{
			echo "<script>alert('Sorry, your Email address is not in our record!')</script>";
		//	header("Location:passwordrefind.php");
			echo "<script>self.location='passwordrefind.php';</script>";

		}	
	}
	?>