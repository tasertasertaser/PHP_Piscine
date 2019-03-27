#! /usr/bin/env php
<?php

$sandwich = explode(' ', $argv[1]);

$tomato = $sandwich[0];
array_shift($sandwich);
	foreach($sandwich as $thing)
	{
		echo "$thing ";
	}
	echo "$tomato\n";
?>
