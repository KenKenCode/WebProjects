
<?php
$link = mysqli_connect("localhost", "root", "", "dbplp");

if($link == false) {
	die("Error: Could not connect. " . mysqli_connect_error());
}

$sqlTable = "SELECT * FROM usertb";
//mysqli_query parameters: mysqli_query(connection, query, resultmode)
//connection: mysql connection to use, query: required. specifies sql string, resultmode: optional. MYSQLI_USE_RESULT (to retrieve large amount of data) MYSQLI_STORE_RESULT(Default)
?>
<html>
<head>
<style>
table, th, tr, td {
	border: 2px solid;
	text-align: center;
	height: 50px;
	justify-content: center;
	paddingL 10px 0;
	text-align: center;
	margin-right: auto;
	margin-left: auto;
	top: 50px;
	bottom:auto;
}

body {
	text-align: center;
}
</style>
</head>
<body>
<?php
if ($result = mysqli_query($link, $sqlTable)) {
	if (mysqli_num_rows($result) > 0) {
		?>
		<table>
            <tr>
			
				<th>UserID</th>
				<th>Username</th>
				<th>Fullname</th>
				<th>Date created</th>
				<th>Action</th>
				</tr>
				<?php
        while($row = mysqli_fetch_array($result)){
			?>
            <tr style="border: 2px solid;">
			
			    
                <td><?php echo $row['userid']; ?> </td>
		        <td><?php echo $row['username']; ?> </td>
				
				
				<td><?php echo $row['fullname']; ?></td>
				
			
                <td> <?php echo $row['datecreated']; ?></td>
				
                <td> <a href ="update.php?userid=<?php echo $row['userid']; ?> "> Edit</a> </td>
                <!--In the part of update.php?userid, the 'userid' part is case sensitive to the database-->
            </tr>

		<?php
		
	}
	echo "</table>";
	mysqli_free_result($result);
	
	}else {
		echo "No records are found";
		echo "<br />";
	}
}

mysqli_close($link);
?>
<a href="login.php">Go back to log-in</a>
</body>
</html>