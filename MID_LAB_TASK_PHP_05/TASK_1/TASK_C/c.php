<!DOCTYPE html>
<html>
<head>
	<title>Name Input</title>
</head>
<body>
	<form method="get" action="c.php">
		<fieldset>
			<legend>Name</legend>
			Name: <input type="text" name="name" value="<?php if(isset($_GET['name'])){ echo $_GET['name'];} ?>"> <br>
			
			<input type="submit" name="submit" value="submit">
		</fieldset>
	</form>
	<br>
	Welcome <?php 
	if(isset($_GET['name'])) echo $_GET["name"] ?>
	
</body>
</html>