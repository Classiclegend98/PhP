<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="style.css">
<title>Chuck Norris Facts</title>
</head>

<body>

	<?php

	$lines= file('chucknorrisfacts.txt');


	$lines = array_filter($lines, function($line){

		return !empty(trim($line));

	} );

	//pick a random line
	$position = array_rand($lines);
	$line = $lines[$position];


	// if the line is empty pick the next line
	/*if(empty(trim($line)))
	{
		$line = $lines[$position + 1];

	}*/
	//echo the line
	echo $line

	?>

</body>
</html>
