#! /usr/bin/env php
<?php
	if ($argc == 2)
	{
		$waffles = fopen($argv[1], 'r');
		while (!feof($waffles))
		{
			$line = fgets($waffles);
			$line = preg_replace_callback('/<a.*?>(.*?)</', function ($pattern)
				{return (str_replace($pattern[1], strtoupper($pattern[1]), $pattern[0]));
				}, $line);
			echo $line;
		}
	}
?>