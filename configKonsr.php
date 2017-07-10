<?php 
function sendSMTP($to, $subject, $message, $attachment = array())
{
	require("class.phpmailer.php");
	require("class.smtp.php");
	$mail= new PHPMailer();
	
	$mail->FromName= "Holland";
	$mail->SMTPDebug = 1;
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPSecure= "ssl";
	$mail->Port = "465";
	$mail->SMTPAuth = true;
	$mail->CharSet = "utf-8";
	$mail->Username = "holland.itkzn@gmail.com";
	$mail->Password = "kazan1811";
	$mail->addAddress($to);
	$mail->From = $to;
	$mail->Subject = $subject;
	$mail->Body = $message;
	foreach ($attachment as $file) {
		$mail->addAttachment($file);
	}

	if($mail->Send()){
		header("Location: thank.php");
	}else{echo "письмо не отправлено"; echo "Ошибка: ".$mail->ErrorInfo;}
}
?>