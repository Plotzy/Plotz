<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Weather Information</title>
<style type="text/css">
.mono {font-family:Consolas, "Andale Mono", "Lucida Console", "Lucida Sans Typewriter", Monaco, "Courier New", monospace}
</style>
</head>

<body>
<body background="PHP.jpg">
<font color="white"> 
<style> a:link { color: white;}
a:visited {color: Red;} </style>

<div style="background-color: #000000; width: 1000px">

<h2> Weather Information </h2>
<p> Version 1.00.00 </p>
<div class="mono">
<?php
$url = 'http://w1.weather.gov/xml/current_obs/KHCD.xml';

// A user agent is neccessary by NOAA to not get 404 errors
// Create a stream
$opts = array(
	'http'=>array(
		'user_agent' => 'PHP retriever plotzjon@go.ridgewater.edu',
		'method' => "GET", 
		'header' => "Accept-language: en\r\n"
	)
);

$context = stream_context_create($opts);
// Open the file using the HTTP headers set above.
$contentString = file_get_contents($url, false, $context); // Get the file.

// echo $contentString;

// <location>Hutchinson, Hutchinson Municipal Airport-Butler Field, MN</location>
$locationStartPos = strpos($contentString, "<location>");
$locationEndPos = strpos($contentString, "</location>");
$locationString = substr($contentString, $locationStartPos+10, $locationEndPos-$locationStartPos-10); 

echo "<br />  $locationString \n ";

//	<observation_time>Last Updated on Nov 7 2016, 4:53 pm CST</observation_time>

$observationStartPos = strpos($contentString, "<observation_time>");
$observationEndPos = strpos($contentString, "</observation_time>");
$observationString = substr($contentString, $observationStartPos+18, $observationEndPos-$observationStartPos-18);
$observationFloat = floatval($observationString);

echo "<br /> $observationString <br /> \n";

//<observation_time_rfc822>Mon, 07 Nov 2016 16:53:00 -0600</observation_time_rfc822>

$observationStartPos = strpos($contentString, "<observation_time_rfc822>");
$observationEndPos = strpos($contentString, "</observation_time_rfc822>");
$observationString = substr($contentString, $observationStartPos+25, $observationEndPos-$observationStartPos-25);
$observationFloat = floatval($observationString);

echo "<br /> $observationString <br /> \n";


//<weather>Overcast</weather>

$weatherStartPos = strpos($contentString, "<weather>");
$weatherEndPos = strpos($contentString, "</weather>");
$weatherString = substr($contentString, $weatherStartPos+9, $weatherEndPos-$weatherStartPos-9);
$weatherFloat = floatval($weatherString);

echo "<br /> Weather......................... $weatherString  \n";

//<temp_f>59.0</temp_f>
$tempStartPos = strpos($contentString, "<temp_f>");
$tempEndPos = strpos($contentString, "</temp_f>");
$tempString = substr($contentString, $tempStartPos+8, $tempEndPos-$tempStartPos-8);
$tempFloat = floatval($tempString);

echo "<br /> Temperature..................... $tempString &deg;F\n";

//<relative_humidity>75</relative_humidity>
$humidStartPos = strpos($contentString, "<relative_humidity>");
$humidEndPos = strpos($contentString, "</relative_humidity>");
$humidString = substr($contentString, $humidStartPos+19, $humidEndPos-$humidStartPos-19);
$humidFloat = floatval($humidString);

echo "<br /> Relative Humidity............... $humidString % \n";

//<pressure_in>30.14</pressure_in>

$pressureStartPos = strpos($contentString, "<pressure_in>");
$pressureEndPos = strpos($contentString, "</pressure_in>");
$pressureString = substr($contentString, $pressureStartPos+13, $pressureEndPos-$pressureStartPos-13);
$pressureFloat = floatval($pressureString);

echo "<br /> Barometric Pressure............. $pressureString in Hg  \n";

//<wind_string>Southwest at 3.5 MPH (3 KT)</wind_string>

$windStartPos = strpos($contentString, "<wind_string>");
$windEndPos = strpos($contentString, "</wind_string>");
$windString = substr($contentString, $windStartPos+13, $windEndPos-$windStartPos-13);
$windFloat = floatval($WindString);

echo "<br /> Wind............................ $windString  \n";
	


?>
<br />
<br />
<img src="thermimg.php?temp=<?php echo $tempFloat; ?>" alt="thermometer" />


<img src="humidimg.php?humid=<?php echo $humidFloat; ?>" alt="hygrometer" />


<img src="barometricimg.php?baro=<?php echo $baroFloat; ?>" alt="barometric" />




<br /> <br />


Version 1.00.00
</div>
</div>
</body>
</html>