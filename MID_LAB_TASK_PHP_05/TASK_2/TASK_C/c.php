<!DOCTYPE html>
<html>
<head>
	<title>E-mail Input</title>
</head>
<body>
	<form method="get" action="c.php">
		<fieldset>
			<legend>EMAIL</legend>
			E-mail: <input type="text" name="email" value="<?php if(isset($_GET['email'])){ echo $_GET['email'];} ?>"> <br>
			
			<input type="submit" name="submit" value="Submit">
		</fieldset>
	</form>
	<br>
		Your E-mail is <?php 
		if(isset($_GET['email'])) echo $_GET["email"] ?>
	
</body>
</html>