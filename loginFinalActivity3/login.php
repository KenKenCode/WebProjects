<html>
<head>
<title>Login page</title>
<style>
body {
	background: #eee;
	
}

#frm {
	border: solid gray 1px;
	width: 20%;
	border-radius: 5px;
	margin: 100px auto;
	background: white;
	padding: 50px;
	
}

#btnLogin {
	display: flex;
	position: absoulte;
	color: #fff;
	background: #337ab7;
	height: 40px;
	display: flex;
	
	
}

#btnRegister {
	position: relative;
	
	color: #fff;
	background: #337ab7;
	height: 30px;
	top: 5px;
	width: 100px;
	
}
</style>
</head>
<!--
log in form
-->
<body>
<div id="frm">
<form action="loginProcess.php" method="POST">

<p>
<label>Username</label>
<input type="text" id="user" name="user" />
</p>

<p>
<label>Password</label>
<input type="password" id="pass" name="pass" />
</p>

<input type="submit" id="btnLogin" value="Login" name="LoginButton"/>


<button type="button" id="btnRegister" onclick="document.location='signup.php'">Register</button>


</form>
</div>
</body>
</html>