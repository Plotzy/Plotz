<?php
//Draw a humid image.


$baroFloat = $_GET['baro'];
if($baroFloat < 0) $baroFloat = 0;
if($baroFloat > 100) $baroFloat = 100;


$image = imagecreatefromjpeg("baro.jpg");

// Center of the needle 128,128
// 0 degrees is East going clockwise
//  0% RH is 100 degrees. 100% RH 80 degrees.
//Total change in degrees is 360-20+ 340 degrees.
// Total humidiity swing is 100%


$slope = 500 / 100; //340 degrees divided by 100% humidiity swing
$degree = ($baroFloat * $slope) + 120; // Number of degrees where ther arc starts


$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
imagesetthickness($image, 4);
imagefilledarc($image, 340, 100, 400, 350, $degree, $degree+1, $red, IMG_ARC_PIE );

//Place to print 5, 225.

$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
$baroString = $baroFloat;

imagestring($image, 5, 5, 225, $baroString, $black);

header("Content-type: image/jpeg"); // Send the header to the browser.
imagejpeg($image); // Send the image to the screen.
imagedestroy($image); // Relsease the image in the memory.

?>