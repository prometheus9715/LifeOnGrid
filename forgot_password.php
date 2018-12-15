<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="new 2style.css">
<link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<style>
@charset "utf-8";



#one{font-family:Nunito;
	font-size:24px;
	text-align:center;
	width:54%;
	padding-top:60px;
	margin: 0 auto;
	margin-top:8%;
border-radius: 5px;
box-shadow:2px 2px 2px 2px  #D3D3D3;
max-width:847px;
max-height:600px;
background-color: #F4F9FC;

}

#two{


	color:#969696;
	padding-top:10px;
	background-color: #F4F9FC;
	width:100%;
	
}
.smallest-font{
	
	font-size:12px;
	
	
}
a{
	color:#969696;
}
@media only screen and (max-width: 700px) {
   #one{
	width:90%;
	margin-left:4%;
	margin-right:4%;

float:left;
}

#two{
float:left;

	color:#969696;
	padding-top:1%;
	background-color: #F4F9FC;
	
}
}
</style>
<body>
	<div  id="one">
	<img src="https://cdn0.iconfinder.com/data/icons/controls-and-navigation-arrows-3/24/140-512.png" height="50px" width="50px">
		<p><strong>We have sent you an email to <span id="emailid">
	
		
<?php


if(isset($_GET['submit']))
	 	{
	 		
   


	 		require 'only_req_files\PHPMailerAutoload.php';
	 		define('DB_SERVER', '127.0.0.1');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_DATABASE', 'logsitedb');
   $mysqli = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);

	 	$emailid=$_GET['emailid'];
	 		$result = $mysqli->query("SELECT pass FROM user where email= '".$emailid."'");

	 		
	 		$user= $result->fetch_assoc();


	 		//echo $user['pass'];
	 		//echo $emailid;


	 		
	 		$message = "<b>your password is.</b>".$user['pass'];
	 		$subject="password";
$mail = new PHPMailer;

$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure='ssl';
$mail->Host ="smtp.gmail.com"; 
$mail->Port = 465;
$mail->Username = "lifeongrid144@gmail.com";
$mail->Password = "vaiswetha";

$mail->From         = 'lifeongrid144@gmail.com';
$mail->FromName     = 'LogSite';
$mail->AddAddress($emailid);
$mail->IsHTML(true);

$mail->Subject = $subject;
$mail->WordWrap = 50;  
$mail->Body = $message;
//$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

//echo !extension_loaded('openssl')?"Not Available":"Available";
//echo (extension_loaded('openssl')?'SSL loaded':'SSL not loaded')."\n";
 
 //$mail->SMTPDebug = 2;  

if(!$mail->Send()) {
   echo 'Message could not be sent.';
   //echo 'Mailer Error: ' . $mail->ErrorInfo;
   exit;
}

echo $emailid;
}
?>
</strong></span></p>

<div id="two">
			<br>If you did’nt receive an email, check your spam folder.</p>
			
			<p>Take me to <a href src="index.php">Sign in</a></p><br><br>
			<p class="smallest-font" padding="0px">© Copyright 2018 designshare.com |<a href="#"> Terms & conditions | Privacy Policy</a></p><br>
		</div>
		</div>
</body>
</html>



