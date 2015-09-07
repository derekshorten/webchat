<?php
//Executing queries

//1
require("database/connect_db.php");

//2
$q = 'SHOW TABLES';

//3 
$r = mysqli_query($dbc,$q);

//4
if($r)
{echo'<h1>Result Set Returned OK</h1>';}
else 
{echo'<p>'.mysqli_error($dbc).'</p>';}	

//5
mysqli_close($dbc);

?>