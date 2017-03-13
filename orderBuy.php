<?php 
require("configKonsr.php");
	
$type = htmlspecialchars($_POST["scr"]);
$color = htmlspecialchars($_POST["color"]);
$size = htmlspecialchars($_POST["size"]);
$colorText = htmlspecialchars($_POST["colorTextKons"]);
$sizeText = htmlspecialchars($_POST["sizeText"]);
$leftText = htmlspecialchars($_POST["leftText"]);
$topText = htmlspecialchars($_POST["topText"]);

header("Location: thank.php");

$im = imagecreatetruecolor(466, 465);


if (isset($_POST["turn"])) {
	$turn = htmlspecialchars($_POST["turn"]);
} $turn = 0;

if (isset($_POST["text"])) {
	$text = htmlspecialchars($_POST["text"]);
} else {$text = "";}

if (isset($_POST["textKonstr" == "arial"])) {
	$font = htmlspecialchars($_POST["textKonstr"]);
} else {$font = "fonts/konstruktor/pricedown.ttf";}

list($r, $g, $b) = sscanf($colorText, "#%02x%02x%02x");
$colorTextGd = imagecolorallocate($im, $r, $g, $b);

if (isset($_POST["visibility"])) {
	$visibility = htmlspecialchars($_POST["visibility"]);
} else { $visibility = 100;}

if (isset($_POST["leftCanvas"])) {
	$leftCanvas = htmlspecialchars($_POST["leftCanvas"]);
	$topCanvas = htmlspecialchars($_POST["topCanvas"]);
} else {
	$leftCanvas = 0;
	$topCanvas = 0;
}

list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
$colorGd = imagecolorallocate($im, $r, $g, $b);

imagefill($im, 0, 0, $colorGd);

$imageSave = "image/imgKonstr/img.jpg";

if (isset($_FILES["photo"])) 
{ if ($_FILES["photo"]["error"] == 0) {
	$imageFile = move_uploaded_file($_FILES["photo"]["tmp_name"], "image/img/".$_FILES["photo"]["name"]);
	$imageFile1 = "image/img/".$_FILES["photo"]["name"];
	$imageSave = "image/imgKonstr/".$_FILES["photo"]["name"];

	switch ($_FILES["photo"]["type"]) {
		case 'image/png':
			$im2 = imagecreatefrompng($imageFile1);
			break;
		case 'image/jpeg':
			$im2 = imagecreatefromjpeg($imageFile1);
			break;
	}
	imagealphablending($im2, false);
	imagesavealpha($im2, true);
	$trans = imagecolorallocatealpha($im2, 0, 0, 0, 127);

	$rotate = imagerotate($im2, $turn*-1, $trans, $visibility);
	$width1 = imagesx($rotate);
	$height1 = imagesy($rotate);
	$width2 = imagesx($im2);
	$height2 = imagesy($im2);

	if ($size == 0) {
		$size = $width2;
	} else {
		$size = $size;
	}
	imagecopyresampled($im, $rotate, (int)$leftCanvas, (int)$topCanvas, 0, 0, $size, $height1, $width1, $height1);
	imagedestroy($im2);	
	imagedestroy($rotate);
	}
}
imagettftext($im, $sizeText, 0, (int)$leftText+150, (int)$topText+200, $colorTextGd, $font, $text);
$im1 = imagecreatefrompng($type);
imagealphablending($im1, false);
imagesavealpha($im1, true);
$width = imagesx($im1);
$height = imagesy($im1);
imagecopyresampled($im, $im1, 0, 0, 0, 0, 466, 465, $width, $height);

// header('Content-Type: image/jpeg');
// imagejpeg($im);
imagejpeg($im, $imageSave, 100);
imagedestroy($im);
imagedestroy($im1);

$tel = htmlspecialchars($_POST["phoneOrder"]);
$sizeFutbol = htmlspecialchars($_POST["sizeFutbol"]);
$number = htmlspecialchars($_POST["number"]);
$price = htmlspecialchars($_POST["price"]);

$to="zackieff@gmail.com";
$subject="Конструктор с сайта Печать  на футболках";
$message = "Телефон ".$tel."\n Тип ".$type."\n Цвет ".$color."\n Название картинки ".$imageFile1."\n Поворот ".$turn."\n Масштаб ".$size."\n Прозрачность ".$visibility."\n Шрифт ".$font."\n Текст ".$text."\n Смещен влево текст ".$leftCanvas."\n Смещен сверху текст ".$topCanvas."\n Размер текста ".$sizeText."\n Цвет текста ".$colorText."\n Размер футболки ".$sizeFutbol."\n Количество штук ".$number."\n Прайс ".$price."\n Изображение футболки: ".$imageSave;
sendSMTP($to, $subject, $message, $attach);
?>