#!/usr/bin/php
<?php
if ($argc == 4)
{
	$count = $argc;
	$i = 1;
	$n1 = trim($argv[1]);
	$op = trim($argv[2]);
	$n2 = trim($argv[3]);
	function ft_do_op($n1, $op, $n2)
	{
		if ($op == "+")
			return $n1 + $n2;
		else if ($op == "-")
			return $n1 - $n2;
		else if ($op == "*")
			return $n1 * $n2;
		else if ($op == "/")
			return $n1 / $n2;
		else
			return $n1 % $n2;
	}
	$result = ft_do_op($n1, $op, $n2);
	print("$result\n");
}
else
{
	print("Incorrect Parameters\n");
	return ;
}
?>