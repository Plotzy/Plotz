<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Lab 3 Results</title>
</head>

<body background="PHP.jpg">
<font color="white"> 
<br /> <br />
<div style="background-color: #404040; width: 500px">Results of your submitted form:</div>
<br /> <br />
<?php
//Print the hidden message
if(!empty($_POST['hiddenMessage'])) {
	$txtHidden = $_POST['hiddenMessage'];
	
} else {
	$txtHidden = "";
}
echo $txtHidden . "<br /> <br /> ";
?>

<?php


// make sure txtParagraph is set to something.

if(!empty($_POST['txtParagraph'])) {
	$txtParagraph = $_POST['txtParagraph'];
	
} else {
	$txtParagraph = "";
}

if(isset($_POST['chkAlphaSort'])) {
	echo '<div style="background-color: #404040; width: 500px;">';
	echo "\n";
	echo "Word Alphabetical Sort <br />\n";
	
	$string = strip_tags($txtParagraph); //Strip out html tags.
	$punctuation = array(".", "!", "?", ",", ";", '"'); //Strip out punctuation.
	$string = str_replace($punctuation, " ", $string);
	$string = stripslashes($string); //Strip out escape characters.
	$string = trim($string); //remove whitespace from ends.
	
	//Turn into a string that is all lowercase.
	$string = strtolower($string);
	
	// Convert to an array and sort.
	$txtarray = explode(" ", $string);
	sort($txtarray);
	$txtstring = implode(", ", $txtarray);
	echo $txtstring . "<br />\n";
	
}


if(isset($_POST['chkAlphaLetterCount'])) {
	echo '<div style="background-color: #404040; width: 500px;">';
	echo "\n";
	echo "<br /> <br /> Alphabetical Letter Count <br /> \n";
	
	$string = strip_tags($txtParagraph); //Strip out html tags.
	$punctuation = array(".", "!", "?", ",", ";", '"'); //Strip out punctuation.
	$string = str_replace($punctuation, " ", $string);
	$string = stripslashes($string); //Strip out escape characters.
	$string = trim($string); //remove whitespace from ends.
	
	//Turn into a string that is all lowercase.
	$string = strtolower($string);
	
	// Convert to an array and sort.
	$txtarray = explode(" ", $string);
	sort($txtarray);
	$txtstring = implode(" , ", $txtarray);
	echo $txtstring . "<br /> <br /> <br />";
	
	// Count the Fequency of the character in a string.
	$hello = count_chars($string);
	echo print_r($alphabetarr);
	
	
	//print the array
	echo "<pre>";
	for ($i=97; $i <= 122; $i++)
	{
		echo chr($i) . "  " . " " . $hello[$i] . "\n";
	}
	echo "</pre>";
}

//Homework Number 2 let's make some magic

if(isset($_POST['chkFreqSort'])) 
	echo '<div style="background-color: #404040; width: 500px;">';
	echo "\n";
	echo "<br /> <br /> Word Frequency Sort <br /> \n";
	
	$string = strip_tags($txtParagraph); //Strip out html tags.
	$punctuation = array(".", "!", "?", ",", ";", '"'); //Strip out punctuation.
	$string = str_replace($punctuation, " ", $string);
	$string = stripslashes($string); //Strip out escape characters.
	$string = trim($string); //remove whitespace from ends.
	
	//Turn into a string that is all lowercase.
	$string = strtolower($string);
	
	//convert string to array and count number of words used
	
	$string = (explode(" ",$string));
print_r(array_count_values($string));
	


?>
<div style= "background-color: #404040; width: 500px">

<br /> Version 1.00.19 </div>
</font>
</body>
</html>
