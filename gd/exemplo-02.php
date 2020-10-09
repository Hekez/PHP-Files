<?php  

$image = imagecreatefromjpeg(include_once("certificado.jpg"));

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Gabriel Batista da Silva", $titleColor);
imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content_Type: image/jpeg");

imagejpeg($image, "certificado" . date("Y/m/d") . ".jpg");

imagedestroy($image);

?>