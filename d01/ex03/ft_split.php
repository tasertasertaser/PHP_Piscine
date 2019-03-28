#! /usr/bin/env php
<?php

function ft_split($string)
{
	$filteredString = preg_replace( '/ +/', ' ', $string);
	$array = explode(' ', $filteredString);
	sort($array);
	print_r($array);
}
?>
