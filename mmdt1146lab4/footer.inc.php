<!-- Day / Time include footer-->
<table>
<tr>
<td>
<font color="white"> 
Yesterday's Date &amp; Time:<br />
<?php echo date('l, F j, Y, h:i A ',time() - 86400 ); ?>
<br /> <br />
Current Date &amp; Time:<br />
<?php echo date('l, F j, Y, h:i A ' ); ?>
<br /> <br />
Tommorows Date &amp; Time <br />
<?php echo date('l, F j, Y, h:i A ',time() + 86400); ?>
</font>
</td>
</tr>
</table>
