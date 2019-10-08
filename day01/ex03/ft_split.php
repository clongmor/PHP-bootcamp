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

?>