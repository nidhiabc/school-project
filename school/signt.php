<?php
include_once 'header.php';
include_once 'class.php';
$obj=new register();
$obj->tregister();
session_start();
?>
<html>
<body>
<form method="post">
<table align="right" border="0" bgcolor='#993333' cellspacing='25' style='padding-top:20px';>
<tr>
<td><h2>
Teacher signup:</h2>
</td></tr>
<tr>
<td>Name:</td>
<td><input type="text" name="name" placeholder="name"/></td>
</tr>
<tr>
<td>
Email id:</td>
<td>
<input type="text" name="mail" placeholder="mail id"/>
</td></tr>
<tr>
<td>Password:</td>
<td><input type="password" name="pass" placeholder="password"/></td>
</tr>
<tr>
<td>speciality:</td>
<td>
<select name="subject">
<option>C language</option>
<option>Operating System</option>
<option>Dbms</option>
<option>Cryptography</option>
<option>Computer Organization</option>
</select>
</td>
</tr>
<tr>
<td></td>
</tr>
<tr>
<td><a href="home.php"><img src='images/home.jpeg' width='50px' height='50px'></a></td>
<td>
<input type="submit" name="signt" value="signup"/>
</td>
</tr>
</table>
</form>
</body>
</html>

