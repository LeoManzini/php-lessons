<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP comparison operators</title>
</head>
<body>
	<?php 
		/* Comparison operators are the same as in other languages
		 * the more different to me is === and <>. The first one compares value and type
		 * if both are true, result will be true too. The second one is the different one for PHP
		 */

		$x = 10;
		$y = 10;

		if ($x === $y) {
			echo "The variables have the same value and type.<br>";
		} else {
			echo "The variables have not the same value and type.<br>";
		}

		$y = "10";

		if ($x === $y) {
			echo "The variables have the same value and type.<br>";
		} else {
			echo "The variables have not the same value and type.<br>";
		}

		if ($x == $y) {
			echo "Now they have the same value.<br>";
		}

		$y = 5;

		if ($x <> $y) {
			echo "Now they really are different.<br>";
		}

		if ($x != $y) {
			echo "But != works as well.<br>";
		}
	?>
</body>
</html>