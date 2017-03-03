<?php
	session_start();

	// remove all session variables
	session_unset();

	// destroy the session 
	session_destroy(); 
?>
<!doctype html>
<html>
	<head>
		<title>Scenarios</title>
	</head>
	<body>
		<h1>Password Field Toggle Security Enhancement</h1>
		<p>To see how forms with passwords that have a "Show Password" function handled in browsers, paying attention to auto-fill and save login information features.</p>
		<nav>
			<ol>
				<li><a href="basic-password-field.php">Basic password field</a></li>
				<li><a href="password-field-with-show-functionality.html">Password field with show functionality</a></li>
				<li><a href="password-field-with-show-functionality-with-autocomplete.html">Password field with show functionality and <em>autocompletion="off"</em></a></li>
				<li>Password field with show functionality and pre submission hook to toggle back to password field</li>
				<li>Password field with show functionality and <em>autocompletion="off"</em> and pre submission hook to toggle back to password field</li>
			</ol>
		</nav>
		<h2>Interesting note(s):</h2>
		<ul>
			<li>Works in local file mode (file://) which opens the door for quick local exploitation</li>
			<li>Password field on its own wont cache (chromium), I needed to add a username field for that to happen</li>
		</ul>
		<h2>Results</h2>
		<table border="1">
			<tr>
				<td></td>
				<th>Chromium</th>
			</tr>
			<tr>
				<th>Basic password field</th>
				<td>Username is saved to auto-fill, password is not</td>
			</tr>
			<tr>
				<th>Password field with show functionality</th>
				<td>
					Password is <strong>NOT</strong> saved when submitted in password mode,<br />
					Password <strong>IS</strong> saved when submitted in text mode
				</td>
			</tr>
		</table>
	</body>
</html>