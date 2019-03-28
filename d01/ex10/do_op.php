#! /usr/bin/env php
<?php

	if ($argc == 4)
	{
		$first_param = trim($argv[1]);
		$secnd_param = trim($argv[3]);
		$op = trim($argv[2]);

		switch($op)
		{
			case '+': $result = $first_param + $secnd_param;
				break;
			case '-': $result = $first_param - $secnd_param;
				break;
			case '*': $result = $first_param * $secnd_param;
				break;
			case '/': $result = $first_param / $secnd_param;
				break;
			case '%': $result = $first_param % $secnd_param;
				break;
		}
		echo "$result\n";
	}	
	else
		echo "Incorrect Parameters\n"

?>
