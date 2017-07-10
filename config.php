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
	$mail->Password = "kazan1811";
	$mail->addAddress($to);
	$mail->From = $to;
	$mail->Subject = $subject;
	$mail->Body = $message;
	if (isset($_FILES["imgFile"])){
		if ($_FILES["imgFile"]["error"]==0) {
			$mail->AddAttachment($_FILES["imgFile"]["tmp_name"], $_FILES["imgFile"]["name"]);
		}
	}
	if($mail->Send()){
		echo "
		<button type='button' class='close' data-dismiss='modal' aria-hidden='true'>&times;</button>
		<div style='margin-top: 19%;'>
			<span class='glyphicon glyphicon-ok' style='font-size: 106px;float: left;margin-left: 13%;margin-top: -2%;color: #6D5F6F;'></span>
			<div style = 'margin-left: 46%;'>
			<p class='lead' style='font-family: Neue Regular;'><span style='font-family: Boldtext;font-size: 24px;'>Спасибо!</span><br>
			Заявка отправлена.<br>
			Сейчас с Вами свяжется наш специалист</p>
			</div>
		</div>";
	}else{echo "письмо не отправлено"; echo "Ошибка: ".$mail->ErrorInfo;}
}
?>