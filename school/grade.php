<?php
include_once "class.php";
session_start();
            $name=$_POST['name'];
            $answer1 = $_POST['q1'];
            $answer2 = $_POST['q2'];
            $answer3 = $_POST['q3'];
            $answer4 = $_POST['q4'];
            $answer5 = $_POST['q5'];
            $totalCorrect = 0;
            if ($answer1 == "PHP: Hypertext Preprocessor") { $totalCorrect++; }
            if ($answer2 == "Request.QueryString;") { $totalCorrect++; }
            if ($answer3 == "$") { $totalCorrect++; }
            if ($answer4 == ";") { $totalCorrect++; }
            if ($answer5=="Perl $ C") { $totalCorrect++; }   
echo "you answered:<br>1)";
echo $answer1;
echo "<br/>2)";
echo $answer2;
echo "<br/>3)";
echo $answer3;
echo "<br/>4)";
echo $answer4;
echo "</br>5)";
echo $answer5;     
$Name = $_POST['name'];
$Subject = "Quiz Results";
$to = $_SESSION['mails'];
$Message = "Here are the quiz results.";
$header="From: mittalnidhi.mittal@gmail.com\r\n";
$align = $_POST['align'];
//$to = "$EmailTo";
$subject = "$Subject";
$body = "$Message\n\nQuiz By: '$name' your result is:\n$totalCorrect / 5 correct";
mail($to,$subject,$body,$header);
echo "<br/>";
echo "<font color='red'>result has been sent to your mail id";
?>
