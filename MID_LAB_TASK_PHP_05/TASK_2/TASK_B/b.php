<html>
<head>
	<title>E-mail Input</title>
</head>
<body>


<form action="b.php" method="get">
	<fieldset>
		<legend>EMAIL</legend>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</fieldset>
</form>
<br>
Your E-mail is <?php 
if(isset($_GET['email'])) echo $_GET["email"] ?>

</body>
</html>