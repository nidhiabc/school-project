<?php
//file reset.php
//title:Build your own Forgot Password PHP Script
session_start();
$token=$_GET['token'];
$con=mysql_connect('localhost','root','root');
mysql_select_db('school',$con);
if(!isset($_POST['password'])){
$q="select email from tokens where token='".$token."' and used=0";
$r=mysql_query($q);
while($row=mysql_fetch_array($r))
   {
$email=$row['email'];
   }
If ($email!=''){
          $_SESSION['email']=$email;
}
else die("Invalid link or Password already changed");}
$pass=$_POST['password'];
$email=$_SESSION['email'];
if(!isset($pass)){
echo '<form method="post">
enter your new password:<input type="password" name="password" />
<input type="submit" value="Change Password">
</form>
';}
if(isset($_POST['password'])&&isset($_SESSION['email']))
{
$q="update users set password='".($pass)."' where email='".$email."'";
$r=mysql_query($q);
if($r)mysql_query("update tokens set used=1 where token='".$token."'");echo "Your password is changed successfully";
if(!$r)echo "An error occurred";
    }
?>
