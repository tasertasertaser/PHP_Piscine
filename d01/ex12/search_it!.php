#!/usr/bin/php
<?php
if ($argc >= 3)
{
	$i = 2;
	while ($i < $argc)
	{
		list($key, $value) = explode(':', $argv[$i]);
		$array[$key] = $value;
		$i++;
	}
	if (array_key_exists($argv[1], $array))
	{
		echo $array[$argv[1]];
		echo "\n";
	}
}
?>
