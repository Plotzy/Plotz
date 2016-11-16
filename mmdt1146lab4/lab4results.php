<html>
<head>
<meta charset="UTF-8">
<title>Lab 4 Results</title>
</head>

<body background="PHP.jpg">
<font color="white"> 
<br /> <br />
<div style="background-color: #404040; width: 500px">Results of your submitted form:</div>
<br /> <br />
<?php
require_once('lab4functions.php');

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
	
	$string = clean_string($txtParagraph);
	
	 $direction = $_POST['radAlphaSort'];
	echo "<!-- $direction -->\n";
	
	
	// Convert to an array and sort.
	$txtarray = explode(" ", $string);
	
	if ($direction == "descending") {
	sort($txtarray);
	} else { 
		rsort($txtarray);
	}
	
	$txtstring = implode(", ", $txtarray);
	echo $txtstring . "<br />\n";
	echo "</div>\n";
	echo "<br /> <br />\n";
echo "<p> Execution time = </p>"; echo (microtime()); echo " &nbsp seconds";

	
	
}


if(isset($_POST['chkAlphaLetterCount'])) {
	echo '<div style="background-color: #404040; width: 500px;">';
	echo "\n";
	echo "<br /> <br /> Alphabetical Letter Count <br /> \n";
	
	$string = clean_string($txtParagraph);
	
	// Convert to an array and sort.
	$string = explode(" ", $string);
	sort($string);
	$string = implode(" , ", $txtarray);
	echo $string . "<br /> <br /> <br />";
	
	// Count the Fequency of the character in a string.
	$string = count_chars($string);
	echo print_r($alphabetarr);
	
	
	//print the array
	echo "<pre>";
	for ($i=97; $i <= 122; $i++)
	{
		echo chr($i) . "  " . " " . $string[$i] . "\n";
	}
	echo "</pre>";
	echo "<p> Execution time = </p>"; echo (microtime());
}

//Homework Number 2 let's make some magic

if(isset($_POST['chkFreqSort'])) 
	echo '<div style="background-color: #404040; width: 500px;">'; echo " &nbsp seconds";
	echo "\n";
	echo "<br /> <br /> Word Frequency Sort <br /> \n";
	//Strip out the nonsense.
	$string = clean_string($txtParagraph);
	
	 $direction = $_POST['radFrqSort'];
	echo "<!-- $direction -->\n";
	
	
	// Convert to an array and sort.
	$txtarray = explode(" ", $string);
	
	if ($direction == "descending") {
	sort($txtarray);
	} else { 
		rsort($txtarray);
	}
	
	$txtstring = implode(", ", $txtarray);
	echo $txtstring . "<br />\n";
	echo "</div>\n";
	echo "<br /> <br />\n";
	
	//convert string to array and count number of words used
	
	$string = (explode(" ",$string));
	print_r(array_count_values($string));
	echo "<p> Execution time = </p>"; echo (microtime()); echo " &nbsp seconds";
	
?>
<div style= "background-color: #404040; width: 500px">
<br />
<br />
<?php include('footer.inc.php'); ?>

<br /> Version 1.00.00 </div>
</font>
</body>
</html>
