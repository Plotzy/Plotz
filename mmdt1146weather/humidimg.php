<?php
//Draw a humid image.


$humidFloat = $_GET['humid'];
if($humidFloat < 0) $humidFloat = 0;
if($humidFloat > 100) $humidFloat = 100;


$image = imagecreatefrompng("hygrometer.png");

// Center of the needle 128,128
// 0 degrees is East going clockwise
//  0% RH is 100 degrees. 100% RH 80 degrees.
//Total change in degrees is 360-20+ 340 degrees.
// Total humidiity swing is 100%


$slope = 300 / 100; //340 degrees divided by 100% humidiity swing
$degree = ($humidFloat * $slope) + 120; // Number of degrees where ther arc starts


$red = imagecolorallocate($image, 0xFF, 0x00, 0x00);
imagesetthickness($image, 4);
imagefilledarc($image, 128, 128, 190, 190, $degree, $degree+1, $red, IMG_ARC_PIE );

//Place to print 5, 225.

$black = imagecolorallocate($image, 0x00, 0x00, 0x00);
$humidString = $humidFloat . "%";

imagestring($image, 5, 5, 225, $humidString, $black);

header("Content-type: image/png"); // Send the header to the browser.
imagepng($image); // Send the image to the screen.
imagedestroy($image); // Relsease the image in the memory.

?>