#!/usr/bin/php
<?php

// $line = readline("Enter a number: ")) != NULL
$f = fopen( 'php://stdin', 'r');
print("Enter a number: ");
while (1)
{
	$line = fgets($f);
	if ($line == NULL)
		die("^D\n");
	$line = trim($line);
	if ((is_numeric($line)) == FALSE)
		print("'$line' is not a number\n");
	else if ($line % 2 == 0)
		print("The number $line is even\n");
	else
		print("The number $line is odd\n");
	print("Enter a number: ");
}
fclose($f);
?>