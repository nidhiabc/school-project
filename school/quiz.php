<?php 
include_once "header.php";
session_start();
$qid = "<u>TEST YOUR SKILLS</u>";
?>
<html>
<head>
<script>
function validateForm()
			{
				var x=document.forms["myForm"]["name"].value;
				if (x==null || x=="")
				{
 					 alert("Plese Enter UserName");
					return false;
  				}
				else
				if ((myForm.q1[0].checked == false ) && ( myForm.q1[1].checked == false)&&
                                   (myForm.q1[2].checked==false) && (myForm.q1[3].checked==false)) 
  				{
  					alert("Plese Enter answer of question1");
  					return false;
  				}
				else
				if((myForm.q2[0].checked == false ) && ( myForm.q2[1].checked == false)&&
                                   (myForm.q2[2].checked==false))
  				{
  					alert("Plese Enter answer of question2");
  					return false;
  				}
				else
				if ((myForm.q3[0].checked == false ) && ( myForm.q3[1].checked == false)&&
                                   (myForm.q3[2].checked==false))
  				{
  					alert("Plese Enter answer of question3");
  					return false;
  				}

				else
				if ((myForm.q4[0].checked == false ) && ( myForm.q4[1].checked == false)&&
                                   (myForm.q4[2].checked==false))
  				{
  					alert("Plese Enter answer of question4");
  					return false;
  				}
                               else
				if ((myForm.q5[0].checked == false ) && ( myForm.q5[1].checked == false)&&
                                   (myForm.q5[2].checked==false))
  				{
  					alert("Plese Enter answer of question5");
  					return false;
  				}
}
</script>
</head>
<body >
<p><h3><? echo "SiteName: $qid"; ?></h3></p>
<form action="grade.php" method="post" name="myForm" onsubmit= "return validateForm()">
<p>Username: <input type="text" name="name"></p>
<p>1.) What does PHP stand for?<br>
<input type="radio" name="q1" value="private home page"> Private Home Page<br>
<input type="radio" name="q1" value="personal hoame page">Personal Home Page<br>
<input type="radio" name="q1" value="persoanl hypertext processor">Personal Hypertext Processor<br>
<input type="radio" name="q1" value="PHP: Hypertext Preprocessor">PHP: Hypertext Preprocessor<br></p>
<p>2.)  How do you get information from a form that is submitted using the "get" method?<br>
<input type="radio" name="q2" value="Request.QueryString;">Request.QueryString;<br>
<input type="radio" name="q2" value="$_GET[];">$_GET<br>
<input type="radio" name="q2" value="Request.Form;">Request.Form;<br></p>
<p>3.) All variables in PHP start with which symbol?<br>
<input type="radio" name="q3" value="&">&<br>
<input type="radio" name="q3" value="$">$<br>
<input type="radio" name="q3" value="!">!<br></p>
<p>4.) 	What is the correct way to end a PHP statement?<br>
<input type="radio" name="q4" value=";">;<br>
<input type="radio" name="q4"value="New Line">New line<br>
<input type="radio" name="q4" value=".">.<br>
<p>5.) The PHP syntax is most similar to:<br>
<input type="radio" name="q5" value="javascript">JavaScript<br>
<input type="radio" name="q5" value="vbscript">VbScript<br>
<input type="radio" name="q5" value="Perl $ C">Perl & C</p>
<p><input type="submit" name="submit" value="Submit Quiz"></p>
<input type="hidden" name="qp" value="answer.php">
</form>
</body>
