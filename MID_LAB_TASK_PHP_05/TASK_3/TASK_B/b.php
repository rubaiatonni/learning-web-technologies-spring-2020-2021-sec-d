<html>
<head>
	<title>Date Input</title>
</head>
<body>


<form action="b.php" method="get">
	<fieldset>
		<legend>DATE</legend>
Date Of Birth: <input type="date" name="date"><br>
<input type="submit">
</fieldset>
</form>
<br>
Your DOB is <?php 
if(isset($_GET['date'])) echo $_GET["date"] ?>

</body>
</html>