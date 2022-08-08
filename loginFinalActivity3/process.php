<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$link = mysqli_connect("localhost", "root", "", "logindatabase");

if($link == false) {
	die("Error: Could not connect. " . mysqli_connect_error());
}

$dateNow = date('Y-m-d');

$timeNow = date('g:i a: sa');

/*
$username = $_POST["user"];

$usernameRegister = $_POST['user'];
*/

if(isset($_POST['LoginButton'])) {
	$username = $_POST['user'];
	$action = "Logged";
	
	$sql = "INSERT INTO users (username, logintime, logindate, action) VALUES ('$username', '$timeNow', '$dateNow', '$action')";
	if (mysqli_query($link, $sql)) {
	echo "Record inserted successfully.";
} else {
	echo "Error: could not execute sql $sql " . mysqli_error($link);
	
}
	
}

if(isset($_POST['RegisterButton'])) {
	$usernameRegistration = $_POST['userOrScreenName'];
	$action = "Registered - $usernameRegistration";
	
	$sql = "INSERT INTO users (username, logintime, logindate, action) VALUES ('$usernameRegistration', '$timeNow', '$dateNow', '$action')";
	if (mysqli_query($link, $sql)) {
	echo "Record inserted successfully.";
} else {
	echo "Error: could not execute sql $sql " . mysqli_error($link);
	
}
	
	/*
	$registrationForm = fopen("registerform.html", "r+") or die("Unable to open file");
	*/
	/*
	//Note: my mistake is that I thought register and login will have the same function, it turns out the register function shall open the html sign up form file.
	$usernameRegister = $_POST['user'];
	$action = "Registered - $usernameRegister";
	
	$sql = "INSERT INTO users (username, logintime, logindate, action) VALUES ('$usernameRegister', '$timeNow', '$dateNow', '$action')";
	*/
}








/*
$username = $_POST['user'];
$password = $_POST['pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysqli_real_escape_string($username, $_POST['user']);
$password = mysqli_real_escape_string($password, $_POST['pass']);


mysql_connect("localhost", "root", "");
mysql_select_db("login");

$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die ("Failed to query database " .mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
	echo "Login success!!! Welcome ", $row['username'];
	
} else {
	echo "Failed to login!";
	
}
*/
?>