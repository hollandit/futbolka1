<?php 

$im = imagecreatetruecolor(466, 465);
$im1 = imagecreatefrompng("image/konstruktor/mushskaya_futbolka.png");
$im2 = imagecreatefrompng("image/65.png");
$white = imagecolorallocate($im, 255, 255, 255);
$black = imagecolorallocate($im, 0, 0, 0);
imagefilledrectangle($im, 0, 0, 466, 465, $white);

$text = "Hello world";
$font = "fonts/site/9114.otf";


$width = imagesx($im1);
$height = imagesy($im1);
$width1 = imagesx($im2);
$height1 = imagesy($im2);

imagecopyresampled($im, $im1, 0, 0, 0, 0, 466, 465, $width, $height);
imagecopyresampled($im, $im2, 200, 150, 0, 0, 100, 100, $width1, $height1);
imagettftext($im, 20, 0, 150, 150, $black, $font, "Hello World");


header("Content-type: image/jpeg");
imagejpeg($im, "image/1.jpeg");
imagejpeg($im);
imagedestroy($im);
?>