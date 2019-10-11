#!/usr/bin/php
<?php
$i = 2;

$find = NULL;
$search = $argv[1];
$len = strlen($search);
while ($i < $argc)
{
	$res = strncmp($search, $argv[$i], $len);
	if ($res == 0)
		$find = substr($argv[$i], ($len + 1));
	$i++;
}
if ($find != NULL)
	print("$find\n");
return ;

?>