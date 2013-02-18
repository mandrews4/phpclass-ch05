<!doctype html>
<html>
  <head>
		<title>Thank you for the posting</title>
	<head>

	<body>
		<?php
		// Script 5.7 - thanks.php

		/*
		 * Get the values of the user's fullname and email address from
		 * the $_GET[] array.
		 *
		 * The url data is automatically decoded by php.
		 */

		$name = $_GET['name'];
		$email = $_GET['email'];

		// Display a thank you message to the user using the values they
		// provided.
			
		print "<p>Thank you $name<br>We will contact you at $email.</p>";

		?>
	</body>
</html>
