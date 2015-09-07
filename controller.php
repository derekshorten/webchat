<?php
session_start();

include("database/connect_db.php");



$action = $_REQUEST['action'];

if ($action=="login") {
	include("func/user_login.php");
}

elseif ($action=="signup") {
	include("func/signup.php");
	

}