<?php  

$image = imagecreatefromjpeg("certificado.jpg");
$black = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 150, "CERTIFICADO", $black);
imagestring($image, 5, 440, 350, "Gabriel Batista da Silva", $black);
imagestring($image, 3, 450, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $black);

header("Content-type: image/jpeg");

imagejpeg($image);

imagedestroy($image);

?>