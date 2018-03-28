<?php

session_start();

header('Content-Type: image/jpeg');

$image = imagecreate(200, 100);

//$caracteres = array_merge(range('a', 'z'), range('A', 'Z'));
$caracteres = range('a', 'z');
shuffle($caracteres);

$palavra = implode($caracteres);
$palavra = substr($palavra, 0, 5);

$_SESSION['captcha'] = $palavra;

imagecolorallocate($image, 0, 0, 0);

$cor = imagecolorallocate($image, 255, 255, 255);
imagettftext($image, 30, rand(-5, 5), rand(20, 60), rand(40, 80), $cor, __DIR__.'/font.ttf', $palavra);

imagejpeg($image);
imagedestroy($image);
