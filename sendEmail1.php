<?php 
require("config1.php");
	if(isset($_POST["call5"]))
	{
		$tel = htmlspecialchars($_POST["call5"]);
		$to="zackieff@gmail.com";
		$subject="Заказ звонка с сайта Печать  на футболках";
		$message = "Нажал на получить 65% скидку. Телефон ".$tel;

		sendSMTP($to, $subject, $message, $attach);
	}
?>