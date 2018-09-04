<!DOCTYPE html>
<html>
<head>
	<title>Form Feedback</title>
	<style type="text/css" title="text/css">
		.error {
			font-weight: bold;
			color: #C00;
		}
	</style>
</head>
<body>

<?php 
	#Script 2.2 - handle_form.php
	
	/* basic input handler START

	$name = $_REQUEST["name"];
	$email = $_REQUEST["email"];
	$comments = $_REQUEST["comments"];
	$age = $_REQUEST["age"];

	if (isset($_REQUEST["gender"])) {
		$gender = $_REQUEST["gender"];
	} else {
		$gender = NULL;
	}

	echo "<p>Thank you, <b>$name</b>, for the following comments: <br /> <tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";

	if ($gender == "M") {
		echo "<p><b>Good day, Sir!</b></p>";
	} elseif ($gender == "F") {
		echo "<p><b>Good day, Madam!</b><p>";
	} else {
		echo "<p><b>You forgot to enter your gender!</b></p>";
	}

	END */

	/* conditional input handler START

	if (!empty($_REQUEST["name"])) {
		$name = $_REQUEST["name"];
	} else {
		$name = NULL;
		echo '<p class="error">You forgot to enter your name!</p>';
	}

	if (!empty($_REQUEST["email"])) {
		$email = $_REQUEST["email"];
	} else {
		$email = NULL;
		echo '<p class="error">You forgot to enter your email!</p>';
	}

	if (!empty($_REQUEST["comments"])) {
		$comments = $_REQUEST["comments"];
	} else {
		$comments = NULL;
		echo '<p class="error">You forgot to enter your comments!</p>';
	}

	if (isset($_REQUEST["gender"])) {
		$gender = $_REQUEST["gender"];

		if ($gender == "M") {
			$greeting =  "<p><b>Good day, Sir!</b></p>";
		} elseif ($gender == "F") {
			$greeting =  "<p><b>Good day, Madam!</b><p>";
		} else {
			$gender = NULL;
			echo "<p class='error'>Gender should be either 'M' or 'F'!</p>";
		}
	} else {
		$gender = NULL;

		echo "<p class='error'>You forgot to select your gender!</p>";
	}

	if ($name && $email && $comments && $gender) {
		echo "<p>Thank you, <b>$name</b>, for the following comments: <br /> <tt>$comments</tt></p><p>We will reply to you at <i>$email</i>.</p>\n";
		echo $greeting;
	} else {
		echo "<p class='error'>Please go back and fill out the form again.</p>";
	}

	END */

	if ( !empty($_POST["name"]) && !empty($_POST["comments"]) && !empty($_POST["email"]) ){
		echo "<p>Thank you, <b>{$_POST['name']}</b>, for the following comments:<br /> <tt>{$_POST['comments']}</tt></p><p>We will reply to you at <i>{$_POST['email']}</i>.</p>\n";
	} else {
		echo "<p>Please go back and fill out the form again.</p>";
	}

 ?>

</body>
</html>