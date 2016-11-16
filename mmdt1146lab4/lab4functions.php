




<?php 
//Clean up the characters in a string.
//Remove all punctiuation.
//Convert all characters to lowercase.
function clean_string($string)
{
	$string = strip_tags($string); //Strip out html tags.
	$punctuation = array(".", "!", ";", '"',"/",); //Strip out punctuation.
	$string = str_replace($punctuation, " ", $string);
	$string = stripslashes($string); //Strip out escaple characters.
	$string = trim($string); // Remove whitespace from ends.
	
	
	//Turn into a string is all lowercase.
	$string = strtolower($string);
	
	return $string;
}



?>