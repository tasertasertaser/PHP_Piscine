#! /usr/bin/env php
<?php

	
$stdin = fopen('php://stdin', 'r');
echo "Enter a number: ";

function evenodd($response)
	{
		$num = intval( substr($response, -1));
		if ( $num % 2 == 0 )
		{
			echo "The number $response is even.\n";
		}
		else
		{
			echo "The number $response is odd.\n";
		}
	}

while($response = rtrim(fgets($stdin), "\n"))
{

	if(!ctype_digit($response)){
		if(substr($response, 0, 1) == '-' && ctype_digit(substr($response, 1)))
		{
			evenodd($response);
		}
		else{
		echo "$response is not a number.\n";
		}
	}
	else
	{
		evenodd($response);
	}
	echo "Enter a number: ";
}
?>
