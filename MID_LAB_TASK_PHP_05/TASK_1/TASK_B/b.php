<html>
<head>
	<title>Name Input</title>
</head>
<body>


<form action="b.php" method="get">
	<fieldset>
		<legend>NAME</legend>
Name: <input type="text" name="name"><br>
<input type="submit">
</fieldset>
</form>
<br>
Welcome <?php 
if(isset($_GET['name'])) echo $_GET["name"] ?>

</body>
</html>