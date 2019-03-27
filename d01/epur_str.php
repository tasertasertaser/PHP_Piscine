#! /usr/bin/env php
<?php
	$filteredString = trim(preg_replace( '/ +/', ' ', $argv[1]));
	echo $filteredString;
?>
