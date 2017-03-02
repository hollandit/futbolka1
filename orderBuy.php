<?php 
require("configKonsr.php");
	$tel = htmlspecialchars($_POST["phoneOrder"]);
	$type = htmlspecialchars($_POST["type"]);
	$color = htmlspecialchars($_POST["color"]);
	$photo = $_FILES["photo"];
	$turn = htmlspecialchars($_POST["turn"]);
	$size = htmlspecialchars($_POST["size"]);
	$font = htmlspecialchars($_POST["font"]);
	$text = htmlspecialchars($_POST["text"]);
	$sizeText = htmlspecialchars($_POST["sizeText"]);
	$colorText = htmlspecialchars($_POST["colorText"]);
	$sizeFutbol = htmlspecialchars($_POST["sizeFutbol"]);
	$number = htmlspecialchars($_POST["number"]);
	$price = htmlspecialchars($_POST["price"]);
	$to="zackieff@gmail.com";
	$subject="Конструктор с сайта Печать  на футболках";
	$message = "Телефон ".$tel."\n Тип ".$type."\n Цвет ".$color."\n Название картинки ".$img."\n Поворот ".$turn."\n Масштаб ".$size."\n Шрифт ".$font."\n Текст ".$text."\n Размер текста ".$sizeText."\n Цвет текста ".$colorText."\n Размер футболки ".$sizeFutbol."\n Количество штук ".$number."\n Прайс ".$price;

	
	sendSMTP($to, $subject, $message, $attach);
	header("Location: thank.php");
?>
