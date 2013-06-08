<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("test",$con);
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
mysql_query("insert into data(FirstName,LastName) values('$fname','$lname')");
echo "successfully registered";
}
elseif(isset($_POST['fetch']))
{
$sql=mysql_query("select * from data ");
echo "<table border='1'><tr>";
while($row=mysql_fetch_array($sql))
{
echo "<td>".$row['FirstName']."</td>" ;
echo "<td>".$row['LastName']."</td>" ;
}
echo "</tr></table>";
}
else{
?>
<!DOCTYPE html>
<html>
<title>
databse connectivity
</title>
<head>
<style>
body
{
background-color:#AAC000;
font-size:"10px";
text-align:center;
margin-top:200px;
}
</style>
</head>
<body>
<form name="myform" method="post">
<table align="center" border="2px">
<th> Sign Up</th></tr>
<tr><td>First name:</td> 
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="fname" placeholder="first name"/></td></tr>
<tr><td>Last name:</td>
<td>&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="lname" placeholder="last name"/></td></tr>
<tr><td></td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="submit" value="test"/>
<input type="submit" name="fetch" value="fetch"></td></tr>
</table>
<audio controls>
  <source src="ash.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio>
</form>
</body>
</html>
<?php
}?>
