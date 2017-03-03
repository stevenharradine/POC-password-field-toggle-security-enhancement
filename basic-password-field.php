<?php
	// Start the session
	session_start();

	if (isset ($_REQUEST['username'])) {
		$_SESSION['name']=$_REQUEST['username'];
	}
?>
<!doctype html>
<html>
	<head>
		<title>Basic password field</title>
	</head>
	<body>
		<h1><a href="index.php">&lt;</a> Basic password field</h1>
<?php
	if (isset ($_SESSION['name'])) {
		echo "Session open";
	} else {
		echo "Session closed";
	}
?>
		<form action="#" method="POST">
			<label for="username">Username: </label>
			<input type="username" id="username" name="username" />
			<br />
			<label for="password">Password: </label>
			<input type="password" id="password" />
			<br />
			<input type="submit" />
		</form>
	</body>
</html>