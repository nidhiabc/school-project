<?php
include_once("header.php");
include_once("class.php");
$ob=new register();
$ob->resett();
?>
<html>
<head>
<style>
#reset
{
margin-top:80px;
}
</style>
</head>
<body>
<form method="post">
<table align ="center">
<tr>
<td><p id='reset'>
<h3>Enter your mail id:
<input type="text" name="mailr" placeholder="mail id"/>
</h3>
</td>
</p>
</tr>
<tr>
<td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="resett" value="submit"/>
</td>
</tr>
</table>
</form>
</body>
</html>

