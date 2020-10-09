<?php  

$image = imagecreatefromjpeg("certificado-02.jpg");
$black = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagettftext($image, 32, 0, 320, 250, $black, "C:" . DIRECTORY_SEPARATOR . "Windows" . DIRECTORY_SEPARATOR . "Fonts" . DIRECTORY_SEPARATOR . "Arial.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 250, 400, $black, "C:" . DIRECTORY_SEPARATOR . "Windows" . DIRECTORY_SEPARATOR . "Fonts" . DIRECTORY_SEPARATOR . "Arial.ttf", "Gabriel Batista da Silva");
imagestring($image, 3, 390, 450, utf8_decode("Concluído em: ") . date("d/m/Y"), $black);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>