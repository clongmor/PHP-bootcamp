#!/usr/bin/php
<?php

function ft_split($str)
{
	$unsort_tab = explode(" ", $str);
	$unsort_tab = array_diff($unsort_tab, array(""));
	$unsort_tab = array_diff($unsort_tab, array("	"));
	$unsort_tab = array_diff($unsort_tab, array(" "));
	sort($unsort_tab);
	return ($unsort_tab);
}

$final = array();
$temp = array();
$count = 1;
while (($count < $argc))
{
	if (preg_match('/\s/',$argv[$count]))
	{
		$temp = ft_split($argv[$count]);
		$final = array_merge($temp, $final);
	}
	else
		array_push($final, $argv[$count]);
	$count++;
}

function order($char)
{
	if (is_numeric($char))
		return ord($char) * 3;
	elseif (ctype_alpha($char))
		return ord($char);
	else
		return ord($char) * 6;

}

function cmp_sort($one, $two)
{
	$one = strtolower($one);
	$two = strtolower($two);
	$one = array_map(order, str_split($one));
	$two = array_map(order, str_split($two));
	
	$i = 0;
	while ($one[$i] == $two[$i] && $i < count($one))
		$i++;
	if ($one[$i] < $two[$i])
		return -1;
	return 1;
}
usort($final, cmp_sort);

$c = 0;
while ($c < count($final))
{
	print("$final[$c]\n");
	$c++;
}
?>