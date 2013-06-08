<?php
include_once "header.php";
?>
<?php
if(isset($_POST['checkbox1']))
{ 
header("location: http://localhost/school/logint.php");
}
elseif(isset($_POST['checkbox2']))
{
header("location: http://localhost/school/logins.php");
}
elseif(isset($_POST['checkbox3']))
{  header("location:http://localhost/school/signt.php");
}
elseif(isset($_POST['checkbox4']))
{
header("location:http://localhost/school/signs.php");
}
else
{
?>
<html>
<body>
<form method="post">
<table>
<tr><td colspan='2'>
<p id="account"><u>if u have already account:</u></p></td>
<td></td></tr>
<tr><td>
<p id="login">Login For Teacher:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="checkbox" name="checkbox1"></p></td></tr>
<tr><td>
<p id="login">Login For Student:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="checkbox" name="checkbox2"/></p></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<tr><td colspan="2"><input type="submit" id="signup" name="login" value="login"/>
</td>
</tr>
</table>
<table>
<tr><td colspan='2'>
<p id ="noaccount"><u>if u do not have account:</u><p></td>
</tr>
<td>
<p id="signup">Sign Up for Teacher:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="checkbox" name="checkbox3"/></p></td></tr>
<tr><td>
<p id="signup">Sign Up for Student:&nbsp;&nbsp;&nbsp;&nbsp;</td><td><input type="checkbox" name="checkbox4"/></p></td></tr>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<tr><td colspan="2"><input type="submit" id="signup" name="signup" value="signup"/>
</td></tr>
</table>
</body>
</html>
<?php
}
  ?>


