<?php 
	require("config.php");
if(isset($_POST["call"]))
{
	$tel = htmlspecialchars($_POST["call"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["call1"]))
{
	$tel = htmlspecialchars($_POST["call1"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на попробовать бесплатно. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["phonePhoto"],$_FILES["imgFile"]))
{
	$tel = htmlspecialchars($_POST["phonePhoto"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на отправить фото. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["call3"]))
{
	$tel = htmlspecialchars($_POST["call3"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на отправить тематический принт. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["call4"]))
{
	$tel = htmlspecialchars($_POST["call4"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на заказать свой макет. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["call0"]))
{
	$tel = htmlspecialchars($_POST["call0"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на получить 35% скидку. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["callSlider"]))
{
	$tel = htmlspecialchars($_POST["callSlider"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на получить слайдер. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}
if(isset($_POST["phonePhoto1"],$_FILES["imgFile1"]))
{
	$tel = htmlspecialchars($_POST["phonePhoto1"]);
	$to="zackieff@gmail.com";
	$subject="Заказ звонка с сайта Печать  на футболках";
	$message = "Нажал на отправить дизайн-макет. Телефон ".$tel;

	sendSMTP($to, $subject, $message, $attach);
	sms($tel);
}

function sms($tel)
{
$config = array(
    'text'    => 'Заявка с сайта печать на футболках: Телефон: '.$tel.'', //Само сообщение в UTF-8
);
  $error = file_get_contents( "https://sms.ru/sms/send?api_id=7694E1B3-1847-C798-3FDD-7856E067EEA1&to=79503164233&text=".urlencode($config["text"]));
}
?>