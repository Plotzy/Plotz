<?php
//Draw a thermometer image.

if(!empty($_GET['temp'])) {
	$tempFloat = $_GET['temp'];
} else {
	$tempFloat = -40;
}

if($tempFloat < -40) $tempFloat = -40;
if($tempFloat > 100) $tempFloat = 100;


$image = imagecreatefrompng("thermometer.png");

$slope = 320 / 140;
$height =($tempFloat + 40) * $slope;
$topPixel = 362 - $height;

$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
imagefilledrectangle($image, 171, 362, 215, $topPixel, $red);
//Center of bulb 53,435
//Bulb about 104 pixels wide

$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
$tempString = $tempFloat . "\xB0F";
// Font size 5 is 9 pixels wide per character
$tempWidth = strlen($tempString) * 9;
// Bulb width is 104 pixles
imagestring($image, 5, 195-($tempWidth/2), 415, $tempString, $black);

header("Content-type: image/png"); // Send the header to the browser.
imagepng($image); // Send the image to the screen.
imagedestroy($image); // Relsease the image in the memory.

?>