#! /usr/bin/env php
<?php

	echo "Enter a number:";
	$stdin = fopen('php://stdin', 'r');
	$response = fgets($stdin);
	$num = intval( $argv[1] );
	if ( $num == 0 || $num % 2 == 0 ){
	echo "The number $argv[1] is even.";
	}
	else
	{
		echo "The number $argv[1] is odd.";
	}
?>
