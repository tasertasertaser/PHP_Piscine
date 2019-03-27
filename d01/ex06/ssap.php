#! /usr/bin/env php
<?php
	
sort($argv);

$sandwich = $argv[0];

array_shift($argv);
foreach($argv as $value)
{
	$sandwich .= ' ';
	$sandwich .= $value;
}

$DINNERBITCH = explode(' ', $sandwich);
	array_shift($DINNERBITCH);
	sort($DINNERBITCH);
	foreach($DINNERBITCH as $thing)
	{
		echo "$thing\n";
	}
?>
