<?PHP
	var_dump($_POST);
	var_dump($_GET);
?>


<html>
<head>
	<title>My First Form</title>
</head>
<body>
	<form method="POST">
		<p>
			<input type="text" name="first_name" id="first_name"/>
		</p>
		<p>
			<input type="text" name="last_name" id="last_name"/>
		</p>
		<input type="submit"/>
	 </form>

</body>
</html>