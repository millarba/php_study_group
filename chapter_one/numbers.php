<!DOCTYPE html>
<html>
<head>
	<title>Numbers!</title>
</head>
<body>

<?php
	# Script 1.8 - numbers.php

	$quantity = 30;
	$price = 119.95;
	$taxrate = .05;
	$total = $quantity * $price;
	$total = $total + ($total * $taxrate);
	$total = number_format($total, 2);

	echo "<h3>Using double quotation marks:</h3>";
	echo "<p>You are purchasing <b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n";

	echo '<h3>Using single quotation marks:</h3>';
	echo '<p>You are purchasing <b>$quantity</b> widget(s) at a cost of <b>\$$price</b> each. With tax, the total comes to <b>\$$total</b>.</p>\n';
?>

</body>
</html>