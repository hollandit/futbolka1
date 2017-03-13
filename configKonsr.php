<?php 
function sendSMTP($to, $subject, $message, $attach=false)
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
	$mail->Password = "JKka235s7";
	$mail->addAddress($to);
	$mail->From = $to;
	$mail->Subject = $subject;
	$mail->Body = $message;
	if (isset($_FILES["photo"])){
		if ($_FILES["photo"]["error"]==0) {
			$mail->AddAttachment($_FILES["photo"]["tmp_name"], $_FILES["photo"]["name"]);
		}
		$mail->AddAttachment($image);
	}

	if($mail->Send()){
		header("Location: thank.php");
	}else{echo "письмо не отправлено"; echo "Ошибка: ".$mail->ErrorInfo;}
}
?>