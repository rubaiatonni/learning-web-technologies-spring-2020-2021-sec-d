<html>
<head>
	<title>Degree Input</title>
</head>
<body>


<form action="b.php" method="get">
	<fieldset>
		<legend>DEGREE</legend>
Degree: 
SSC<input type="checkbox" value="SSC" name="degree">
HSC<input type="checkbox" value="HSC" name="degree">
BSc<input type="checkbox" value="BSc" name="degree">
MSc<input type="checkbox" value="MSc" name="degree">
<br>
<input type="submit">
</fieldset>
</form>
<br>
Your Degree is <?php 
if(isset($_GET['degree'])) echo $_GET["degree"] ?>

</body>
</html>