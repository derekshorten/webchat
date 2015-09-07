<?php
?>
<html>
<head>Social Messenger - Index Page 
</head>
<link href="Style/style.css"type="text/css"rel="stylesheet" />
<?php

include ('include\header.php');
//include ('include\nav.php');
?>

<body>
<form class="logout" action="index.php" method="post" />
<input type ="submit" name="logout" value="LOGOUT"/>
</form>

<form class="login" action="controller.php" method="post" />
 <input type="hidden" name="action" value="login"/>

<fieldset class="login" action="controller.php" method="post"/>
<legend>
<b>LOGIN<b/>
</legend>
<P>EMAIL:</p>   
<p>
<input type="text" name ="email" required ="required" size="20" maxlength ="50" />
</P>
<P>PASSWORD: </p>   
<p>  
<input type="password" name ="password" required ="required" size="20" maxlength ="50" />
</P>
<input type ="submit" name="login" value="LOGIN"/>


</fieldset>
</form>

<form class="signup"action="controller.php" method="post" >
<input type="hidden" name="action" value="signup"/>

<fieldset class="signup" action="controller.php" method="post"/>
<legend>
SIGN UP
</legend>
<P>FIRST NAME</p>   
<p>
<input type="name" name ="first_name"required ="required" size="20" maxlength ="50" />
</P>
<P>LAST NAME</p>   
<p>
<input type="name" name ="last_name"required ="required" size="20" maxlength ="50" />
</P>
<P>EMAIL:</p>   
<p>
<input type="text" name ="email"required ="required" size="20" maxlength ="50" />
</P>
<p>COUNTRY</P>
<p>

<input name ="country"required ="required" size="20" maxlength ="50" >

</select>
</P>
<P>PASSWORD:</p>   
<p>
<input type="password" name ="password"required ="required" size="20" maxlength ="50" />
</P>
<P>CONFORM PASSWORD:</p>   
<p>
<input type="password" name ="password"required ="required" size="20" maxlength ="50" />
</P>
<input type ="submit" name="submit" value="SIGN UP"id="submitted"/>
</fieldset>
</form>

	


<?php

include ('include\footer.php');
?>