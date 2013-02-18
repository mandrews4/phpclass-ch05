<!doctype html>
<html>
  <head>
		<title>Employee information</title>
	<head>

	<body>
		<?php
		// ch05 homework - process_strings.php

		/* This script receives six values from strings.html:
       		first_name, last_name, email, social insurance number,
       		clear-text password, submit */

    	// Get the values from the $_POST array
       	// Strip away extra spaces using trim():

		$first_name = trim(htmlentities($_POST['first_name']));
		$last_name = trim(htmlentities($_POST['last_name']));
		$email = trim(htmlentities($_POST['email']));
		$sin = trim(htmlentities($_POST['sin']));

		// Create a full name variable:
		$name = $first_name . ' ' . $last_name;

		// Encrypt the clear-text password
		$password = crypt(trim($_POST['password']));

		// Obfuscate the social insurance number
		$len = strlen($sin);
		if ($len > 3 ) {
			$sin = substr_replace($sin, 'XX', -2);
		}
		else
			$sin = substr_replace($sin, 'X', -1);

		// Print a message, which includes all user provided information
		print '<div>Thank you, ' . $name . ', for your information:<br>
		<p>Employee name: ' . $name . '<br>
		Email: ' . $email . '<br>
		SIN: ' . $sin . '<br>
		Password: ' . $password . '</p></div>';

		?>
	</body>
</html>
