<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Internal functions</title>
</head>
<body>
	<?php 
		$sample_phrase = "Hi Leonardo";
		echo "Original String: ".$sample_phrase;
		echo "<br>";

		// Measure the length of a string, considering white spaces
		echo "Strlen: ".strlen($sample_phrase);
		echo "<br>";

		// Count how many words we have on a string
		echo "Word count: ".str_word_count($sample_phrase);
		echo "<br>";

		// Reverse a string word for word
		echo "String reverse: ".strrev($sample_phrase);
		echo "<br>";

		// Shows which position a determined string start on a full string
		echo "String position: ".strpos($sample_phrase, "Leonardo");
		echo "<br>";

		// Replace a determined word with some word in a string
		echo "Replace words: ".str_replace("Leonardo", "Giovanna", $sample_phrase);
		echo "<br>";
	 ?>
</body>
</html>