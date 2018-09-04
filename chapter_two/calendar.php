<!DOCTYPE html>
<html>
<head>
	<title>Calendar</title>
</head>
<body>

<form action="calendar.php" method="POST">

<?php 
	# Script 2.6 - calendar.php
	$months = array(
		1 => "January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"
	);
	$days = range(1, 31);
	$years = range(2011, 2021);

	echo "<select name='month'>";
	foreach ($months as $key => $value) {
		echo "<option value=\"key\">$value</option>\n";
	}
	echo "</select>";

	echo "<select name='day'>";
	foreach ($days as $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
	echo "</select>";

	echo "<select name='year'>";
	foreach ($years as $value) {
		echo "<option value=\"$value\">$value</option>\n";
	}
	echo "</select>";
 ?>

</form>

</body>
</html>