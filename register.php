<?php
$page_title = 'Register';
include ('include\header.php');

if($_SERVER['REQUEST_METHOD'] =='POST')
{
require('../connect_db.php');
$errors = array();

if(empty($_POST['fist_name']))
{$errors[]='Enter your first name.';}
else
{$fn = mysqli_real_escape_string($dbc,
						trim($_POST['first_name']));}
							
if(empty($_POST ['last_name']))
{$errors[]='Enter your last name.';}
else
{$ln = mysqli_real_escape_string($dbc,
						trim($_POST['last_name']));}

							
if(empty($_POST ['email']))
{$errors[]='Enter your email.';}
else
{$e = mysqli_real_escape_string($dbc,
						trim($_POST['email']));}
						
							
if(empty($_POST ['pass1']))
{$errors[]='Enter your pass2';}
else
{$p = mysqli_real_escape_string($dbc,
						trim($_POST['pass1']));}
}
else{$errors[]='Enter your password.';}

if (empty($errors))
{
$q = "SELECT user_id FROM users where email ='$e'";
$r = mysqli_query ($dbc, $q);
if(mysqli_num_rows($r)!=0)
{serrors[] ='Email address already registered.
<a href = "login.php">login</a>';}
}

if (empty($errors))
{
 $q = "INSERT INTO users 
		(first_name,last_name,email,password)
		VALUES('$fn','$ln','$e',SHA1('$p'),)";		
$r mysql_query($dbc, $q);

if($r)
{
echo'<h1>Registered!<h1>
	 <p>You are now registered.</P>
	 <p><a href = "login.php">login</a></p>':
}
mysql_close($dbc);
include ('include\footer.php');
exit();
}
else 
{
	echo'<h1>Error</h1>
	<p id = "err_msg"> The following error(s) occurred:<br>';
	foreach($erros as $msg)
	{
		echo " - $msg<br>";
	}
	echo'Please try again.</P>';
	mysql_close $dbc);
}



?>