<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Results</title>
</head>
<body>
<h1> the sum of two numbers </h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1-$num2;
	echo "<p> the subsrtraction of $num1 - $num2 is : $sum <p>";
}
?>
<a href="substraction.html">substraction</a>
</body>
</html>