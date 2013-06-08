<?php
include_once 'header.php';
include_once "class.php";
session_start();
$obj=new register();
if(isset($_POST['logins']))
{
$obj->logins();
}
?>
<html>
<head>
<script>
function validateForm()
{
var x=document.forms["myform"]["mails"].value;
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
var x=document.forms["myform"]["mails"].value;
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
<form method="post" name="myform" onsubmit="return validateForm()";>
				<tr>
					<td><h2>Student Login:</h2>
					</td>
				</tr>
				<tr>
					<td><label>Email id:</label></td>
					<td><input type='text' name='mails' placeholder="Email id"></td>
				</tr>
				<tr>
					<td><label>Password:</label></td>
					<td ><input type='password' name='pass' id='pass' placeholder="Password"></td>
				</tr>				
				<tr>
					<td></td>
					<td><a href='resets.php'>forgot password</a></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type='submit' name='logins' value='login'>
					</td>
					
				</tr>
</form>
			</table>
</body>
</html>
