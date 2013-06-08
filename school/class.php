<?php
$con=mysql_connect("localhost","root","root");
mysql_select_db("school",$con); 
class register
{
	function tregister()
	{
		if(isset($_POST['signt']))
		{
			$n=$_POST['name'];
			$p=$_POST['pass'];
			$sub=$_POST['subject'];
			$mail=$_POST['mail'];
                        $p=md5($p); 
			$sql=mysql_query("insert into teacher(name, password, subject,mail) values('$n','$p','$sub','$mail')");
			echo "succefully registered";
		}

	}
	function sregister()
	{ 
		if(isset($_POST['signs']))
		{ 
		$name=$_POST['name'];
		$pass=$_POST['pass'];
		$branch=$_POST['branch'];
		$year=$_POST['year'];
		$mail=$_POST['mail'];
                $pass=md5($pass);
		$sql=mysql_query("insert into student(name, password, branch, year,mail) values('$name','$pass','$branch','$year','$mail')");
		echo "successfully registered";
		}
	}
	function logint()
	{      
		if(isset($_POST['logint']))
                    { 
                        $name=$_POST['mailt'];
			$pass=$_POST['pass'];
                        $pass=md5($pass);
			$sql= "select * from teacher where mail='$name' and password ='$pass'";
			$result= mysql_query($sql);
                        session_start(); 
                        while ($row = mysql_fetch_array($result))
                         	{   
					$_SESSION['mailt']= $name;
				
                                        		
		        	}

		         $count= mysql_num_rows($result);
			if($count==1)
			        {
					$url='assign.php';
					echo "successful";
                                        echo '<script type="text/javascript">';
      					echo 'window.location.href="'.$url.'";';
     					echo '</script>';
                                        
			        } 
			else
				{
					echo "wrong";
				}
		    }
	}
	function logins()
	{
		if(isset($_POST['logins']))
		{
			 $name=$_POST['mails'];
			 $pass=$_POST['pass'];
                         $pass=md5($pass);
                         $sql= "select * from student where mail='$name' and password ='$pass'";
		         $result= mysql_query($sql);
                         session_start();
 			while ($row = mysql_fetch_array($result))
                         	{   
                                         echo $_POST['mails'];
					$_SESSION['mails']= $_POST['mails'];
		        	}
	                 $count= mysql_num_rows($result);
                          //$_SESSION['mails']=$name;
			 if($count==1)
				{
                                        
					echo successful;
                                        header("location:http://localhost/school/option.php");
				} 
			 else
				{
					echo wrong;
				}
		}
	}
	function resett()
	{
		if(isset($_POST['resett']))
   		 {
			$email = $_POST['mailr'];
    			$sql= "SELECT mail,password FROM teacher WHERE mail ='$email'";
    			$query = mysql_query($sql);
    			if(mysql_affected_rows() != 0)
   				{
				    $row=mysql_fetch_array($query);
				    $password=$row["password"];
				    $email=$row["mail"];
				    $subject=" Password Request";
				    $header="From: mittalnidhi.mittal@gmail.com\r\n";
				    $content="Your password is ".$password;
				    mail($email, $subject, $content, $header);
				    print "An email containing the password has been sent to you";
    				}
   			 else
   				{
   				    echo("no such login in the system. please try again.");
    				}
    		}
	}
	function resets()
	{
		if(isset($_POST['resets']))
    		  {
			 $email = $_POST['mails'];
			 $sql= "SELECT mail,password FROM student WHERE mail ='$email'";
			 $query = mysql_query($sql);
			 if(mysql_affected_rows() != 0)
   				{
				    $row=mysql_fetch_array($query);
				    $password=$row["password"];
				    $email=$row["mail"];
				    $subject=" Password Request";
				    $header="From: mittalnidhi.mittal@gmail.com\r\n";
				    $content="Your password is ".$password;
				    mail($email, $subject, $content, $header);
				    print "An email containing the password has been sent to you";
    				}
    			else
    				{
    				    echo("no such login in the system. please try again.");
    				}
   		   }
	}
	function assign()
	{       $name=$_SESSION['mailt'];
		if(isset($_POST['submit']))
		   {                      
				    $fileName = addslashes($_FILES['assign']['name']);
				    $fileType  = $_FILES['assign']['type'];
				    $fileSize   = $_FILES['assign']['size'];
                                    $created_date = date('d-m-Y');
				    $fileContents = addslashes(fread(fopen($_FILES['assign']['tmp_name'], "r"), $fileSize));
				    mysql_query("insert into assign(file,type,size,content,t_name,created_date)   
                                    values('$fileName','$fileType','$fileSize','$fileContents','$name','$created_date')");
				    echo "successfully submitted";
                    }	   
	}
        function see()
        {
                $query = mysql_query("SELECT * FROM assign ");
                mysql_num_rows($query);
                echo "<h1 align='center'>All Assignment for downloading</h1></br>";
                echo "<table border='1' align='center'><tr>";
		echo "<th>Date</th>";
		echo "<th>Mail_id</th>";
		echo "<th>File name</th>";
		echo "</tr><tr>";
                while($row_test=mysql_fetch_array($query))
                    {                                                   
 ?>      
                                     <td><?php echo $row_test['created_date'];?></td> 
                                     <td><?php echo $row_test['t_name'];?></td> 
                                     <td><a href="download.php?filename=<?php echo  $row_test['file']; ?>" 
                                     class="links"><?php echo  $row_test['file']; ?> </br></br></td></tr>
<?php
                    }
                echo "</table>"; 
         }

}

?>
