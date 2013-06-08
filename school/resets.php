<?php
include_once("header.php");
include_once("class.php");
$obj6=new register();
$obj6->resets();
?>
<html>
<head>
<style>
#resets
{
margin-top:80px;
}
</style>
</head>
<body>
<form method="post">
<table align ="center">
<tr>
<td><p id='resets'>
<h3>Enter your mail id:
<input type="text" name="mails" placeholder="mail id"/>
</h3>
</td>
</p>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="resets" value="reset password"/>
</td>
</tr>
</form>
</table>
</body>
<html>
