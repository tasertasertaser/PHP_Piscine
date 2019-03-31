#! /usr/bin/env php
<?php
	
$sandwich = $argv[0];

function getchartype($c)
{
	if (ctype_alpha($c))
		return 0;
	if (ctype_digit($c))
		return 1;
	else
		return 2;
}

function cmp($a, $b)
{
	$i = 0;
	$a = strtolower($a);
	$b = strtolower($b);
	$shorter = min(strlen($a), strlen($b)); // find end of the shorter string
	while ($i < $shorter && ($a[$i] == $b[$i])) // setting i to the first different character
		$i++;
	if ($i == $shorter && strlen($a) == $shorter) // check if one string has ended & the other hasn't
		return -1;	
	if ($a[$i] && $b[$i])
	{
		$aChartype = getchartype($a[$i]);
		$bChartype = getchartype($b[$i]);
		if($aChartype > $bChartype)
			return 1;
		else if($aChartype < $bChartype) 
			return -1;
		else if($aChartype == $bChartype)
		{
			if($a[$i] > $b[$i])
				return 1;
			if($a[$i] < $b[$i])
				return -1;
			if($a[$i] == $b[$i])
				return 0;
		}
	}
}

array_shift($argv);
foreach($argv as $value)
{
	$sandwich .= ' ';
	$sandwich .= $value;
}

$DINNERBITCH = explode(' ', $sandwich);
	array_shift($DINNERBITCH);
	natcasesort($DINNERBITCH);
	usort($DINNERBITCH, "cmp");
	foreach($DINNERBITCH as $thing)
	{
		echo "$thing\n";
	}
?>