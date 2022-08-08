<html>

<head>
<style>
body {
	text-align: center;
	
}
</style>
</head>
<!--
add form - insert query
-->
<body>

<?php
$link = mysqli_connect("localhost", "root", "", "dbplp");

if($link == false) {
	die("Error: Could not connect. " . mysqli_connect_error());
}

$dateNow = date('Y-m-d');

if(isset($_POST['buttonRegisterName'])) {
	$userNameRegister = $_POST['userRegisterName']; //name of username textbox in html form same goes with the following variables 
	$fullNameRegister = $_POST['fullnameName'];
	$passwordRegister = $_POST['passwordName'];
	
	
	$sql = "INSERT INTO usertb (username, fullname, datecreated, passwordcolumn) VALUES ('$userNameRegister', '$fullNameRegister', '$dateNow', '$passwordRegister')";
	
	if (mysqli_query($link, $sql)) {
	echo "Record inserted successfully.";
    header('location: view.php');
	
} else {
	echo "Error: could not execute sql $sql " . mysqli_error($link);
	
}


}

?>
<br />
<button type="button" id="seeRecordsID" name="seeRecordsName" onclick="document.location='view.php'">See records</button>

</body>

</html>