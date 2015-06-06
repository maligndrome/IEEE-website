<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Thank you</title>
</head>

<body>
<?php
include "classes/class.phpmailer.php";
$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPDebug = 1;
$mail->SMTPAuth = true; 
$mail->SMTPSecure = 'ssl'; 
$mail->Host = "smtp.gmail.com";
$mail->Port = 465; // or 587
$mail->IsHTML(true);
$mail->Username = "convener.ieeenitk@gmail.com";
$mail->Password = "ieeeisthenewsexy";
$mail->SetFrom($_POST['email']);
$mail->Subject = 'Message from'.$_POST['name'];
$mail->Body = $_POST['message']."<br /> Sent by ".$_POST['name']."<br /> Contact number:".$_POST['mobile']."<br />Email id:".$_POST['email'];
$mail->AddAddress("convener.ieeenitk@gmail.com");
 if(!$mail->Send()){
	echo "Mailer Error: " . $mail->ErrorInfo;
	echo '<script>setTimeout(function(){window.location.assign("http://google.co.in")},4000);</script>';
}
else{
	echo "Message has been sent";
	echo '<script>setTimeout(function(){window.location.assign("http://google.co.in")},4000);</script>';
}
?>
</body>
</html>