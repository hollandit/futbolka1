<?php 
require("configKonsr.php");
<?php 
require("configKonsr.php");
	
$type = htmlspecialchars($_POST["scr"]);
$color = htmlspecialchars($_POST["color"]);
// $photo = $_FILES["photo"];
$size = htmlspecialchars($_POST["size"]);
$colorText = htmlspecialchars($_POST["colorTextKons"]);
$sizeText = htmlspecialchars($_POST["sizeText"]);


// header("Location: thank.php");

$im = imagecreatetruecolor(466, 465);
$im1 = imagecreatefrompng($type);
imagealphablending($im1, false);
imagesavealpha($im1, true);

if (isset($_POST["turn"])) {
	$turn = htmlspecialchars($_POST["turn"]);
} $turn = 0;

if (isset($_POST["text"])) {
	$text = htmlspecialchars($_POST["text"]);
} else {$text = "";}

if (isset($_POST["textKonstr" == "arial"])) {
	$font = htmlspecialchars($_POST["textKonstr"]);
} else {$font = "fonts/konstruktor/pricedown.ttf";}

if (isset($_POST["leftText"])) {
	$leftText = htmlspecialchars($_POST["leftText"]);
	// $topText = htmlspecialchars($_POST["topText"]);
} else {
	$leftText = 150;
	// $topText = 150;
}

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

echo($leftText);
list($r, $g, $b) = sscanf($color, "#%02x%02x%02x");
$colorGd = imagecolorallocate($im, $r, $g, $b);

imagefill($im, 0, 0, $colorGd);

$width = imagesx($im1);
$height = imagesy($im1);


imagecopyresampled($im, $im1, 0, 0, 0, 0, 466, 465, $width, $height);
if (isset($_POST["photo"])) {
	$imageFile = move_uploaded_file($_FILES["photo"]["tmp_name"], "image/img/".$_FILES["photo"]["name"]);
	$imageFile1 = "image/img/".$_FILES["photo"]["name"];
	$imageSave = "image/imgKonstr/".$_FILES["photo"]["name"];
	$im2 = imagecreatefrompng($imageFile1);
	imagealphablending($im2, false);
	imagesavealpha($im2, true);
	$trans = imagecolorallocatealpha($im2, 0, 0, 0, 127);
	

	$rotate = imagerotate($im2, $turn*-1, $trans, $visibility);
	$width1 = imagesx($rotate);
	$height1 = imagesy($rotate);
	$width2 = imagesx($im2);
	$height2 = imagesy($im2);
	imagecopyresampled($im, $rotate, $leftCanvas, $topCanvas, 0, 0, 60+10*$size, 60+10*$size, $width1, $height1);
}
imagettftext($im, $sizeText, 0, $leftText, 150, $colorTextGd, $font, $text);

header('Content-Type: image/gif');
imagejpeg($im);
imagedestroy($im);
// imagedestroy($im1);
// imagedestroy($im2);	
// imagedestroy($rotate);

$tel = htmlspecialchars($_POST["phoneOrder"]);
$sizeFutbol = htmlspecialchars($_POST["sizeFutbol"]);
$number = htmlspecialchars($_POST["number"]);
$price = htmlspecialchars($_POST["price"]);

$to="zackieff@gmail.com";
$subject="Конструктор с сайта Печать  на футболках";
$message = "Телефон ".$tel."\n Тип ".$type."\n Цвет ".$color."\n Название картинки ".$img."\n Поворот ".$turn."\n Масштаб ".$size."\n Прозрачность ".$visibility."\n Шрифт ".$font."\n Текст ".$text."\n Смещен влево текст ".$leftCanvas."\n Смещен сверху текст ".$topCanvas."\n Размер текста ".$sizeText."\n Цвет текста ".$colorText."\n Размер футболки ".$sizeFutbol."\n Количество штук ".$number."\n Прайс ".$price;
// sendSMTP($to, $subject, $message, $attach);
?>
?>
