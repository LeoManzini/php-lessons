<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP logical operators</title>
</head>
<body>
	<?php 
		$x = 10;
		$y = 20;

		/* Logical operators accept writen operators and not just symbols
		 * accepting both
		 */
		if ($x == $y or 1 == 1) {
			echo "True";
		}

		if ($x == $y and 1 == 1) {
			echo "True";
		}

		if ($x == $y xor 1 == 1) {
			echo "True";
		}
	?>
</body>
</html>