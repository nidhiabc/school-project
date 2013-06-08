<?php
include_once("header.php");
include_once("class.php");
session_start();
$obj7=new register();
$obj7->assign();
?>
<html>
<head>
<style>
#assign
{
margin-top:80px;
}
#submit
{
margin-left:220px;
}
</style>
</head>
<body>
<?php echo " Welcome,".$_SESSION['mailt']; ?>
<form method ="post" enctype="multipart/form-data">
<table align="center">
<tr>
<td><p id="assign">
Submit assignment
<input type="file" name="assign" />
</td>
</tr>
<tr></tr>
<tr>
<td>
<input id="submit" type="submit" value="submit" name="submit"/>
</td>
</tr>
</p>
</table>
</form>
</body>
</html>
