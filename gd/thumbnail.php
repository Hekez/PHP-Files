<?php  

header("Content-type: image/jpeg");

$image = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

list($old_width, $old_height) = getimagesize($image);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($image);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image);

imagedestroy($new_image);

?>