<?php 
require("configKonsr.php");
	
$type = htmlspecialchars($_POST["scr"]);
$color = htmlspecialchars($_POST["color"]);
$size = htmlspecialchars($_POST["size"]);
$colorText = htmlspecialchars($_POST["colorTextKons"]);
$sizeText = htmlspecialchars($_POST["sizeText"]);
$leftText = htmlspecialchars($_POST["leftText"]);
$topText = htmlspecialchars($_POST["topText"]);

$fontFace = htmlspecialchars($_POST["textKonstr"]);
$src =  "fonts/konstruktor/";
switch ($fontFace) {
	case 'arial':
		$font = $font = $src."pricedown.ttf";
		break;
	case 'pricedown':
		$font = $font = $src."pricedown.ttf";
		break;
	case 'a_BraggaStars':
		$font = $font = $src."a_BraggaStars.ttf";
		break;
	case 'a_CampusGrDcFr':
		$font = $font = $src."a_CampusGrDcFr.ttf";
		break;
	case 'FuturaRound':
		$font = $font = $src."FuturaRound/FuturaRound.ttf";
		break;
	case 'a_PlakatTitul':
		$font = $font = $src."a_PlakatTitul/a_PlakatTitul.ttf";
		break;
	case 'Bulka':
		$font = $font = $src."Bulka/Bulka.ttf";
		break;
	case 'DSArmyCyr':
		$font = $font = $src."DSArmyCyr/DSArmyCyr.ttf";
		break;
	case 'ErikaBold':
		$font = $font = $src."ErikaBold/ErikaBold.ttf";
		break;
	case 'JikharevBoldItalic':
		$font = $font = $src."JikharevBoldItalic/JikharevBoldItalic.ttf";
		break;
	case 'MartaDecorTwo':
		$font = $font = $src."MartaDecorTwo.ttf";
		break;
	case 'MontblancCTT':
		$font = $font = $src."MontblancCTT Italic/MontblancCTT Italic.ttf";
		break;
	case 'Montblanc':
		$font = $font = $src."MontblancCTT/MontblancCTT.ttf";
		break;
	case 'Olietta':
		$font = $font = $src."Olietta/Olietta script BoldItalic.ttf";
		break;
	case 'RosamundaOne':
		$font = $font = $src."Rosamunda One Normal/Rosamunda One Normal.ttf";
		break;
	case 'RosamundaTwo':
		$font = $font = $src."Rosamunda Two/Rosamunda Two.ttf";
		break;
	case 'Swiss':
		$font = $font = $src."Swiss_extra_comp_37 Italic/Swiss_extra_comp_37 Italic.ttf";
		break;
	case 'T_Jihkarev':
		$font = $font = $src."T_Jihkarev.ttf";
		break;
	case 'Terminator':
		$font = $font = $src."Terminator/Terminator Cyr Semi-expanded Bold.ttf";
		break;
	case 'Unicorn':
		$font = $font = $src."Unicorn Rus/Unicorn Rus.ttf";
		break;
	case 'UnicornUkrainian':
		$font = $font = $src."Unicorn Ukrainian/Unicorn Ukrainian.ttf";
		break;
	case 'yermak':
		$font = $font = $src."yermak/yermak.ttf";
		break;
	case 'Lifehack':
		$font = $font = $src."Lifehack Basic/Lifehack Basic.otf";
		break;
	case 'LifehackBold':
		$font = $font = $src."Lifehack Bold/Lifehack Bold.otf";
		break;
	case 'LifehackGoodies':
		$font = $font = $src."Lifehack Goodies/Lifehack Goodies.otf";
		break;
	case 'Lifehack Italic Bold':
		$font = $font = $src."Lifehack Italic Bold/Lifehack Italic Bold.otf";
		break;
	case 'Lifehack_Italick_Medium':
		$font = $font = $src."Lifehack Italic Medium/Lifehack Italic Medium.otf";
		break;
	case 'LifehackItalic':
		$font = $font = $src."Lifehack Italic/Lifehack Italic.otf";
		break;
	case 'LifehackMedium':
		$font = $font = $src."Lifehack Medium/Lifehack Medium.otf";
		break;
	case 'tangak':
		$font = $font = $src."tangak/tangak.otf";
		break;
}


header("Location: thank.php");

$im = imagecreatetruecolor(466, 465);


if (isset($_POST["turn"])) {
	$turn = htmlspecialchars($_POST["turn"]);
} $turn = 0;

if (isset($_POST["text"])) {
	$text = htmlspecialchars($_POST["text"]);
} else {$text = "";}

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
sendSMTP($to, $subject, $message, $attachment = array($imageFile1, $imageSave));
?>