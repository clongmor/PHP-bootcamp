#!/usr/bin/php
<?php
if ($argc == 2)
{
	$argv[1] = preg_replace('/\s+/', '', $argv[1]);
	$i = 0;
	while ($i <= strlen($argv[1]))
	{
		if (ctype_alpha($argv[1][$i]))
		{
			print("Syntax Error\n");
			exit(0);
		}
		$i++;
	}
	$i = 0;
	while ($i <= strlen($argv[1]))
	{
		if (($argv[1][$i] == "*") || ($argv[1][$i] == "/") || ($argv[1][$i] == "+") || ($argv[1][$i] == "-") || ($argv[1][$i] == "%"))
		{
			$n1 = substr($argv[1], 0, $i);
			$op = substr($argv[1], $i, 1);
			$n2 = substr($argv[1], ($i + 1));
			break ;
		}
		$i++;
	}
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