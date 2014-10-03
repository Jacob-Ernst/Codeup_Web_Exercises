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
			<input type="text" name="username" id="username" placeholder="username"/>
		</p>
		<p>
			<label for="password">Password:</label>
			<input type="password" name="password" id="password" placeholder="password"/>
		</p>
		<input type="submit"/>
	 </form>

	<h2>Compose Email</h2>
	<form method="POST">
		<p>
			<label for="to">To:</label>
			<input type="text" name="to" id="to" placeholder="who should we send to?"/>
		</p>
		<p>
			<label for="from">From:</label>
			<input type="text" name="from" id="from" placeholder="who are you?"/>
		</p>
		<p>
			<label for="subject">Subject:</label>
			<input type="text" name"subject" id="subject" placeholder="subject"/>
		</p>
		<p>
			<label for="body">Body:</label>
			<textarea id="email_body" name="email_body" rows="5" cols="40"></textarea>
		</p>
		<p>
			<label><input type="checkbox" name="save copy" id="save copy" checked/>Save Copy</label>
		</p>

		<input type="submit"/>
	 </form>
	 <form method="POST">
	 <h2>Multiple Choice Test</h2>
	 	<p>
	 		<h3>Is Jacob awesome?</h3>
	 		<label><input type="radio" id="q1a" name="q1" value="Yes" />Yes</label>
	 		<label><input type="radio" id="q1b" name="q1" value="OMFG YES!" />OMFG YES!</label>
	 		<label><input type="radio" id="q1c" name="q1" value="Duh" />Duh</label>
	 		<label><input type="radio" id="q1d" name="q1" value="Si" />Si</label>
	 	</p>
	 	<p>
	 		<h3>Best TV show?</h3>
	 		<label><input type="radio" id="q2a" name="q2" value="Doctor Who" />Doctor Who</label>
	 		<label><input type="radio" id="q2b" name="q2" value="The Strain" />The Strain</label>
	 		<label><input type="radio" id="q2c" name="q2" value="Hunter x Hunter" />Hunter x Hunter</label>
	 		<label><input type="radio" id="q2d" name="q2" value="Parts Uknown" />Parts Uknown</label>
	 	</p>
	 	<p>
	 		<h3>Jacob's Favorite Foods</h3>
	 		<label for "foods[]">Foods to choose</label>
	 		<select name="foods[]" id="foods" multiple>
	 			<option>Pizza Pizza</option>
	 			<option>Sushi</option>
	 			<option>twinkies</option>
	 			<option>flesh</option>
	 		</select>


	 	</p>




	 	<input type="submit" value="Test your luck!"/>
	 </form>
	 <form method="POST">
	 	<h2>Si or nein</h2>
	 	<label for "yesno">1 || 0</label>
	 	<select name="yesno" id="yesno">
	 		<option value="1" selected>Si</option>
	 		<option value="0">nein</option>
	 	</select>


	 	<input type="submit" value="go"/>
	 </form>
	 <iframe width="420" height="315" src="//www.youtube.com/embed/zaGUr6wzyT8" frameborder="0" allowfullscreen></iframe>

</body>
</html>