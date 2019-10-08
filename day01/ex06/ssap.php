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
sort($final);

$c = 0;
while ($c < count($final))
{
	print("$final[$c]\n");
	$c++;
}
?>