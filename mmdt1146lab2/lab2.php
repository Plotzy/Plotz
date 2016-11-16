<!doctype html>

<html>

<head>

<meta charset="utf-8">

<title>Lab 2</title>

</head>

<body background="PHP.jpg">
<font color="white">

<p><h1> Welcome to Lab 2!</h1> </p>

<table width="300" border="1">

  <tbody>
  
    <tr>
    
      <td width="290">
      
      <?php
	  
	  $firstName="<b>Jonathan </b>";
	  
	  $lastName="<b>Plotz</b>";
	  
	  $fullName=$firstName . " " . $lastName;
	  
	  echo "<b>My name is </b> " . $fullName . ". <br /> <br /> ";
	  
	  echo "<b>Your IP address is </b> " . $_SERVER['REMOTE_ADDR'];
	  
      ?>
      
      </td>
      
    </tr>
    
    <tr>
    
      <td>
      
      <?php
	  
	  define ('PI', 3.1415926); //Defining a constant name PI
	  
	  // Do the calculations
	  
	  $radius = 300;
	  
	  $circumference = 2 * PI * $radius;
	  
	  $area= 30;
	  
	  $area= PI * $radius * 30 * 30;
	  
	  $PI = 3.1415926;
	  
	  
	  echo "<b> My input radius is </b> " . $radius . ". <br /> <br />";
	  
	  echo "<b> My input circumference is </b> "   . number_format($circumference, 1) . ". <br /> <br />  ";
	  
	  echo "<b> My input to area is </b> " . number_format($area, 1) .  ". <br /> <br />";
	  
	  echo "<b> My input for PI is </b> " . $PI . ". <br /> <br />";
	  
	  ?>
      
      </td>
      
    </tr>
    
</table>

</tbody>

</font>

</body>

</html>