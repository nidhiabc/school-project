<?php
include_once "class.php";
session_start();
$title = "Quiz Results";
echo "<title>$title</title>";
if (isset ($_POST['submit'])) {
   $name = $_POST['name'];
   $q1 = $_POST['q1'];
   $q2 = $_POST['q2'];
   $q3 = $_POST['q3'];
   $q4 = $_POST['q4'];
   $q5 = $_POST['q5'];
   $qp = $_POST['qp'];
}
if ($name == "") {
   die ("You forgot something, go back and check over your quiz.");
}
if ($q1 == "") {
   die ("You forgot something, go back and check over your quiz.");
}
if ($q2 == "") {
   die ("You forgot something, go back and check over your quiz.");
}
if ($q3 == "") {
   die ("You forgot something, go back and check over your quiz.");
}
if ($q4 == "") {
   die ("You forgot something, go back and check over your quiz.");
}
if ($q5 == "") {
   die ("You forgot something, go back and check over your quiz.");
}
{
	echo<<<EOT
<p>$name: your Results: <br>
1.) $q1<br>
2.) $q2<br>
3.) $q3<br>
4.) $q4<br>
5.) $q5</p>
<p><a href="quiz.php">Go Back To Quiz?</a>

EOT;
}
$Name = $_POST['name'];
$Subject = "Quiz Results";
$to = $_SESSION['mails'];
$Message = "Here are the quiz results.";
$header="From: mittalnidhi.mittal@gmail.com\r\n";
$align = $_POST['align'];
//$to = "$EmailTo";
$subject = "$Subject";
$body = "$Message\n\nQuiz By: $Name\n$q1\n$q2\n$q3\n$q4\n$q5";
mail($to,$subject,$body,$header);
//header("Location:answer.php");
?>
