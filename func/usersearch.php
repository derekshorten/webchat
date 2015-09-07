<?php
require("database/connect_db.php");
include("database/require.php");
//include("database/query.php");

$name = $_POST['search'];
    
    if (mysqli_connect_errno())
      {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      }

$result = mysqli_query($con, "SELECT * FROM users
    WHERE first_name LIKE '%{$name}%' OR last_name LIKE '%{$name}%'");

while ($row = mysql_fetch_array($result))
{
        echo $row['first_name'] . " " . $row['last_name'];
        echo "<br>";
}
    mysqli_close($con);
 ?>