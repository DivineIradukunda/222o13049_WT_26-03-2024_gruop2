<!DOCTYPE html>
<html>
<head>

	<title>Results</title>
</head>
<body>
	<h1> the multiplication of two number </h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1*$num2;
	echo "<p> the multplication of $num1 * $num2 is : $sum <p>";
}
?>
<a href="multiplication.html">multiplication</a>
</body>
</html>