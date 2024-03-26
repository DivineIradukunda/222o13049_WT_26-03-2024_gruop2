<!DOCTYPE html>
<html>
<head>
	<title>results</title>
</head>
<body>
<h1> addition of two number  </h1>
<?php
if ($_SERVER["REQUEST_METHOD"]=="POST") {
	$first=$_POST['first'];
	$second=$_POST['second'];
	$num1=$_POST['num1'];
	$num2=$_POST['num2'];
	$sum=$num1+$num2;
	echo "<p> the sum of $num1 + $num2 is : $sum <p>";
}
?>
<a href="addition.html">addition</a>
</body>
</html>