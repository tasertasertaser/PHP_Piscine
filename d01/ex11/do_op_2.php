#! /usr/bin/env php
<?php

function do_math($arg){
		if (strpos($arg, '+'))
		{
			$jj = explode('+', $arg, 2);
			if(is_numeric($jj[0]) && is_numeric(($jj[1])))
				return($jj[0] + $jj[1]);
			else
				return NULL;
		}
		else if (strpos($arg, '*'))
		{
			$jj = explode('*', $arg, 2);
			if(is_numeric($jj[0]) && is_numeric(($jj[1])))
				return($jj[0] * $jj[1]);
			else
				return NULL;
		}
		else if (strpos($arg, '/'))
		{
			$jj = explode('/', $arg, 2);
			if(is_numeric($jj[0]) && is_numeric(($jj[1])))
				return($jj[0] / $jj[1]);
			else
				return NULL;
		}
		else if (strpos($arg, '%'))
		{
			$jj = explode('%', $arg, 2);
			if(is_numeric($jj[0]) && is_numeric(($jj[1])))
				return($jj[0] % $jj[1]);
			else
				return NULL;
		}
		else if (strpos($arg, '-'))
		{
			$jj = explode('-', $arg, 2);
			if(is_numeric($jj[0]) && is_numeric(($jj[1])))
				return($jj[0] - $jj[1]);
			else
				return NULL;
		}
		else
			return NULL;
}

	if ($argc == 2)
	{
		$result = do_math($argv[1]);
		if($result == NULL)
			echo "Syntax Error\n";
		else
			echo "$result\n";
	}
	else
		echo "Incorrect Parameters\n"

?>
