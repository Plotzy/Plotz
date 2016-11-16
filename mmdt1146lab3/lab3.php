<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Week Lab 3</title>
</head> 

<body background="PHP.jpg">
<font color="white"> 
<h2> Let's have fun in Week 3 Lab 3! </h2>



</font><form id="frmMain" name="frmMain" method="post">

<p><font color="white"> Choose one or more evaluation methods:</font></p>
<font color="white"><input type="checkbox" name="chkAlphaSort" id="chkAlphaSort">
<label for="chkAlphaSort"> Word Alphabetical Sort </label>
<br /> 
<input type="checkbox" name="chkFreqSort" id="chkFreqSort">
<label for="chkFreqsort"> Word Frequency Sort </label>
<br /> 
<input type="checkbox" name="chkAlphaLetterCount" id="chkAlphaLetterCount">
<label for="chkAlphaLetterCount"> Alphabetical Letter Count</label>
<br /> 
<br /> 
<b>Enter the text you want evaluated: </b> <br /> <br />
<textarea name="txtParagraph" cols="50" rows="10" id="txtParagraph">>The quick brown fox jumps over the lazy dog.</textarea>
</font>
<input name="hiddenMessage" type="hidden" id="hiddenMessage" value="My name is Jonathan Plotz">
<p> 
<font color="white"><input name="btnSubmit" type="submit" id="btnSubmit" formaction="lab3results.php" value="Submit" formation="lab3results.php"></font>
</p>
<p>
<font color="white"> Version 1.00.19</font>
</p>
</form>

</body>
</html>