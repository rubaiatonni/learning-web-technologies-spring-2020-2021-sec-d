<html>
<head>
	<title>Gender Input</title>
</head>
<body>


<form action="b.php" method="get">
	<fieldset>
		<legend>GENDER</legend>
Gender: 
Male<input type="radio" value="Male" name="gender">
Female<input type="radio" value="Female" name="gender">
Other<input type="radio" value="Other" name="gender">
<br>
<input type="submit">
</fieldset>
</form>
<br>
Your Gender is <?php 
if(isset($_GET['gender'])) echo $_GET["gender"] ?>

</body>
</html>