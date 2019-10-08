#!/usr/bin/php
<?php
if ($argv[1])
{
	$str = trim($argv[1]);
	$str = preg_replace('/\s+/', ' ', $str);

	function ft_split($str)
	{
		$unsort_tab = explode(" ", $str);
		return ($unsort_tab);
	}
	$tab = array();
	$tab = ft_split($str);
	$tab[count($tab)] = $tab[0];
	$sentence = join(" ", array_splice($tab, 1));
	print("$sentence\n");
}
?>