<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Week Lab 4</title>
</head>

<body>
<body background="PHP.jpg">
<font color="white"> 

<form id="form1" name="form1" method="post">
  <p>Choose one or more evaluation methods.</p>
  <input name="chkAlphaSort" type="checkbox" id="chkAlphaSort">
  <label for="chkAlphaSort">Word Alphabetical Sort &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    </label>
  <label>
    <input name="radAlphaSort" type="radio" id="radAlphaSort_2" value="ascending" checked="checked">
    Ascending </label>
  		  &nbsp;&nbsp;&nbsp;&nbsp; <input type="radio" name="radAlphaSort" value="descending" id="radAlphaSort_3">
Descending<br />
<br />
  
  <input type="checkbox" name="chkFreqSort" id="chkFreqSort">
  <label for="chkFreqSort">
  WordFrequency Sort 
  <label>
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <input name="radFrqSort" type="radio" id="radFrqSort_0" value="ascending" checked="checked">
    Ascending </label>
  <label>
   &nbsp;&nbsp;&nbsp;&nbsp;
    <input type="radio" name="radFrqSort" value="descending" id="radFrqSort_1">
    Descending </label>
  <br />
  <br />
  <input type="checkbox" name="chkAlphaLetterCount" id="chkAlphaLetterCount">
  
  <label for="chkAlphaLetterCount">
  Alphabetical Letter Count <br />
  <br />
  Enter the text you want evaluated: <br />
  <label for="txtParagraph"></label>
  <textarea name="txtParagraph" cols="50" rows="10" id="txtParagraph">The quick brown fox jumps over the lazy dog.</textarea>
  <p>
  <input name="btnSubmit" type="submit" id="btnSubmit" formaction="lab4results.php" value="Submit">
  </p>
  
  
  <p> <?php include('footer.inc.php'); ?> </p>
  
  

 
  <br />
  <p><b>Version 1.00.00</b></p>
   </font>
</form>
</body>
</html>