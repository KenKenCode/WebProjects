<html>
<head>
<style>
body {
	display: block;
	margin-left: auto;
	margin-right: auto;
    text-align: center;
	
}

</style>
</head>
<!--
Sign-up - information
-->
<body>

<form action="add.php" method="POST">
<label>Username</label>
<input type="text" id="userRegisterID" name="userRegisterName" required>
<br />

<label>Fullname</label>
<input type="text" id="fullnameID" name="fullnameName" required>
<br />

<label>Password</label>
<input type="password" id="passwordID" name="passwordName" required>
<br />


<input type="submit" id="buttonRegisterID" name="buttonRegisterName" value="Sign Up">

<!--
<button type="button" id="seeRecordsID" name="seeRecordsName" onclick="document.location='view.php'">See records</button>
-->
</form>

</body>
</html>

