<!DOCTYPE html>
<html>
<head>
	<title>Chapter One Review</title>
</head>
<body>

<h3>Chapter One Review</h3>

<p>In this chapter we learned the following PHP rules and syntax.</p>

<?php
	# Script 1.10 - chapter_one_recap.php
	
	# defining string variables
	$street = "1113 SE Lowell";
	$city = "Ankeny";
	$state = "Iowa";
	$address = $street . " " . $city . ", " . $state;

	echo "<p>How to create string variables such as: <br />Street: <b>$street</b><br />City: <b>$city</b><br />State: <b>$state</b></p>\n";
	echo "<p>How to concatenate those strings using the '.' operator<br />Address: <b>$address</b></p>\n";

	$first_number = 5;
	$second_number = 2;
	$sum = $first_number + $second_number;
	$product = $first_number * $second_number;

	echo "<p>We also learned how to create number variables<br />First Number: <b>$first_number</b><br />Second Number: <b>$second_number</b><br /> and how to manipulate them using arithmetic<br />Sum: <b>$first_number</b> + <b>$second_number</b> = <b>$sum</b><br />Product: <b>$first_number</b> * <b>$second_number</b> = <b>$product</b></p>";

	define("TAX_RATE", 0.06);

	echo "<p>We also learned about constants, how to create them, and why they are useful<br />Constant Tax Rate: <b>" . TAX_RATE . "</b></p>";

	echo "<p>Lastly, we learned the difference between single and double quotes and why they are important to distinguish between:<br />Single quotes won't interpret variables, instead, they will print the literal value inside the quotes</p>";
	echo '<p>Like this: $first_number</p>';
	echo "<p>However, double quotes will interpret the variable value</p>";
	echo "<p>Like this: <b>$first_number</b></p>";
?>

</body>
</html>