<?php
//Updaterecord.php
$link = mysqli_connect("localhost", "root", "", "dbplp");

if($link == false) {
	die("Error: Could not connect. " . mysqli_connect_error());
}


if (count($_POST)>0) {
mysqli_query($link, "UPDATE usertb SET username = '" . $_POST['userNameName'] . "', fullname = '" . $_POST['fullNameName'] . "', passwordcolumn = '" . $_POST['passwordNameName'] . "' WHERE userid = '" . $_POST['userIDUpdateName'] . "'");
$message = "Record successfully updated";
}


$result = mysqli_query($link, "SELECT * FROM usertb WHERE userid = '" . $_GET['userid'] . "'");
$row= mysqli_fetch_array($result);
?>

<html>
<head>
<style>
body {
	text-align: center;
	
}
</style>
</head>

<!--update.html-->
<body>


<form action="" method="POST">
<?php
if(isset($message)) {
echo $message;

}


?>
<a href="view.php">Go back to records</a> <br />
<h2>Update a record</h2>

<br />

<label>User ID:</label>
<input type="text" name="userIDUpdateName" id="userIDUpdateID" value="<?php echo $row['userid']; ?> " readonly="readonly">
<br />

<label>Username:</label>
<input type="text" name="userNameName" id="userNameID" value ="<?php echo $row['username']; ?>">
<br>

<label>Fullname:</label>
<input type="text" name="fullNameName" id="fullNameID" value ="<?php echo $row['fullname']; ?>">
<br>

<label>Password:</label>
<input type="password" name="passwordName" id="passwordID" value ="<?php echo $row['PasswordColumn']; ?>"><!--PARAMETER INSIDE $ROW IS CASE SENSITIVE. This parameter shall hold the columns in sql table-->
<br /><br />
<input type="submit" name="submitUpdateName" value="submit">
<br>

</form>

</body>

</html>