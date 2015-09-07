<?php
// input
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];


// perform login test
$sql = 'SELECT * FROM users 
		WHERE email = "'.$email.'"
		AND password =  "'.$password.'"';
$result = $conn->query($sql);


// act on the results
// > no account found
if ($result->num_rows == 0) {
	header('Location: index.php');
}

// > login successful
elseif ($result->num_rows == 1) {
	$row = $result->fetch_assoc();
	$_SESSION['userid'] = $row['id'];
	header('Location: usersdisplay.php');
}

// > error multiple accounts with the same login details
else {
	header('Location: error.php');
}


