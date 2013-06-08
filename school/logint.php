<?php
include_once 'header.php';
include_once 'class.php';
$obj3=new register();
if(isset($_POST['logint']))
{ 
$obj3->logint();

}
?>
<html>
<head>
<script>
function validateForm()
{
var x=document.forms["myform"]["mailt"].value;
				if (x==null || x=="")
				{
 				 alert("Plese Enter mail id");
				  return false;
  				}
				else
				var x=document.forms["myform"]["pass"].value;
				if (x==null || x=="")
  				{
  				alert("Plese Enter Password");
  				return false;
  				}
else
var x=document.forms["myform"]["mailt"].value;
var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)
  {
  alert("Not a valid e-mail address");
  return false;
  }
}
</script>
</head>
<body>
<table align="right" border="0" bgcolor='#993333' cellspacing='25' style='padding-top:20px';>
<form  name='myform' method="post" action='' onsubmit="return validateForm()";>
				<tr>
					<td><h2>Teacher Login:</h2>
					</td>
				</tr>
				<tr>
					<td><label>Email id:</label></td>
					<td><input type='text' name='mailt' placeholder="Email id"/>
				<tr>
					<td><label>Password:</label></td>
					<td ><input type='password' name='pass' placeholder="Password"></td>
				</tr>				
				<tr>
					<td></td>
					<td><a href="resett.php">forgot password</a></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type='submit' name='logint' value='login'>
					</td>
					
				</tr>
</form>
			</table>
</body>
</html>
