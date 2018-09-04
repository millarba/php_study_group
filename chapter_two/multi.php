<!DOCTYPE html>
<html>
<head>
	<title>Multidimensional Arrays</title>
</head>
<body>

<p>Some North American States, Provinces, and Territories</p>

<?php 
# Script 2.7 - multi.php
	$mexico = array(
		"YU" => "Yucatan",
		"BC" => "Baja California",
		"OA" => "Oaxaca"
	);

	$us = array(
		"MD" => "Maryland",
		"IL" => "Illinois",
		"PA" => "Pennsylvania",
		"IA" => "Iowa"
	);

	$canada = array(
		"QC" => "Quebec",
		"AB" => "Alberta",
		"NT" =>  "Northwest Terirtories",
		"TY" => "Yukon",
		"PE" => "Prince Edward Island"
	);

	$n_america = array(
		"Mexico" => $mexico,
		"United States" => $us,
		"Canada" => $canada
	);

	foreach ($n_america as $country => $list) {
		echo "<h2>$country</h2><ul>";
		foreach ($list as $key => $value) {
			echo "<li>$key - $value</li>";
		}
		echo "</ul>";
	}
 ?>

</body>
</html>