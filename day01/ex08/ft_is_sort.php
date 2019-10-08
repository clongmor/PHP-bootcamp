#!/usr/bin/php
<?php
function ft_is_sort($tab)
{
	$sorted = array();
	$sorted = $tab;
	sort($sorted);
	$result = array_diff($tab, $sorted);
	return $tab == $sorted;
}
?>