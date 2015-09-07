<?php 

	  if(isset($_POST['submit'])){ 
	  if(isset($_GET['go'])){ 
	  if(preg_match("/^[  a-zA-Z]+/", $_POST['name'])){ 
	  $first_name=$_POST['first_name']; 
	  $last_name=$_POST['last_name'];
	  //connect  to the database 
	  $db=mysql_connect  ("servername", "username",  "password") or die ('I cannot connect to the database  because: ' . mysql_error()); 
	  //-select  the database to use 
	  $mydb=mysql_select_db("messaging"); 
	  //-query  the database table 
	  $sql="SELECT   first_name, last_name FROM users WHERE first_name LIKE '%" . $first_name .  "%' OR Last_Name LIKE '%" . $name ."%'"; 
	  //-run  the query against the mysql query function 
	  $result=mysql_query($sql); 
	  //-create  while loop and loop through result set 
	  while($row=mysql_fetch_array($result)){ 
	          $first_name  =$row['first_name']; 
	          $last_name=$row['last_name']; 
			  
	  //-display the result of the array 
	  echo "<ul>\n"; 
	  echo "<li>" . "<a  href=\"search.php?id=$ID\">"   .$first_name . " " . $last_name .  "</a></li>\n"; 
	  echo "</ul>"; 
	  } 
      } 
	  else{ 
	  echo  "<p>Please enter a search query</p>"; 	  } 
	  } 
	  } 
	?>