<?php
include_once 'header.php';
include_once 'class.php';
$obj1=new register();
$obj1->sregister();
?>
<html>
<body>
<form method="post">
<table align="right" border="0" bgcolor='#993333' cellspacing='25' style='padding-top:20px';>
<tr>
<td><h2>
Student signup:</h2>
</td></tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" placeholder="name"/></td>
</tr>
<tr>
<td>Email id:</td>
<td><input type="text" name="mail" placeholder="mail"/></td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" placeholder="password"/></td>
</tr>
<tr>
<td>Branch:</td>
<td>
<select name='branch'>
<option>Computer science</option>
<option>Information technology</option>
</select>
</td></tr>
<tr>
<td>
Year:</td>
<td>
<select name='year'>
<option>Ist Yr</option>
<option>IInd Yr</option>
<option>IIIrd Yr</option>
<option>IVth Yr</option>
</select>
</td></tr>
<tr><td><a href="home.php"><img src='images/home.jpeg' width='50px' height='50px'></a></td>
<td>
<input type="submit" name="signs" value="signup"/>
</td>
</tr>
</table>
</form>
</body>
</html>


