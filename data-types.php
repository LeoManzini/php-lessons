<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP data types</title>
</head>
<body>
	<?php 
		/* String variable, can be used single quotes too, 
		 * but for include strings inside strings, 
		 * can't be the same type of quotes, because of this, 
		 * I'll use souble quotes and single quotes internally
		*/
		$name = "Leonardo H. Manzini";

		// Integer
		$age = 23;

		// Float
		$weight = 77.5;

		// Boolean
		$isFalse = false;
		$isTrue = true;
		
		if ($isTrue) {
		    echo "This condition is true (also 0 value can represent true).<br>";
		} else {
		    echo "This condition is false (also 1 value can represent false).<br>";
		}

		if (!$isFalse) {
		    echo "This condition is false (also 1 value can represent false).<br>";
		} else {
		    echo "This condition is true (also 0 value can represent true).<br>";
		}

		// Array
		$names = array("Leonardo", "Giovanna");
		print_r($names);
	?>
</body>
</html>