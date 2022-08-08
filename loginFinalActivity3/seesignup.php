<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
include('connect.php');


if(isset($_POST['signUpEmailName'])) {
    $nameSignUp = $_POST['nameName'];
	$emailSignUp = $_POST['signUpEmailName']; //name of username textbox in html form same goes with the following variables 
	$passwordSignUp = $_POST['signUpPasswordName'];
	
	
	
	$sql = "INSERT INTO users (name, email, password) VALUES ('$nameSignUp', '$emailSignUp', '$passwordSignUp')";
	
	if (mysqli_query($link, $sql)) {
	echo "Record inserted successfully.";
    header('location: homePage.php');
	
} else {
	echo "Error: could not execute sql $sql " . mysqli_error($link);
	
}


}

?>