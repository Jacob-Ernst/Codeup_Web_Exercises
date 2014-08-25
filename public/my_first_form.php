<?PHP
	var_dump($_POST);
	var_dump($_GET);
?>


<html>
<head>
	<title>My First Form</title>
</head>
<body>
	<h2>User Login</h2>
	<form method="POST">
		<p>
			<label for="username">Username:</label>
			<input type="text" name="username" id="username"/>
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password"/>
		</p>
		<input type="submit"/>
	 </form>

	<h2>Compose Email</h2>
	<form method="POST">
		<p>
			<label for="to">To:</label>
			<input type="text" name="to" id="to"/>
		</p>
		<p>
			<label for="from">From:</label>
			<input type="text" name="from" id="from"/>
		</p>
		<p>
			<label for="subject">Subject:</label>
			<input type="text" name"subject" id="subject"/>
		</p>
		<p>
			<label for="body">Body:</label>
			<textarea id="email_body" name="email_body" rows="5" cols="40">Content Here</textarea>
		</p>
		<input type="submit"/>
	 </form>

</body>
</html>