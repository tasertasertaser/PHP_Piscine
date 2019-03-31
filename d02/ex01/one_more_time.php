#! /usr/bin/env php
<?php

if($argc == 2){

$day = array(
	0 => 'Lundi',
	1 => 'Mardi',
	2 => 'Mercredi',
	3 => 'Jeudi',
	4 => 'Vendredi',
	5 => 'Samedi',
	6 => 'Dimanche',
);

$month = array(
	0 => 'Janvier',
	1 => 'Février',
	2 => 'Mars',
	3 => 'Avril',
	4 => 'Mai',
	5 => 'Juin',
	6 => 'Juillet',
	7 => 'Août',
	8 => 'Septembre',
	9 => 'Octobre',
	10 => 'Novembre',
	11 => 'Décembre',
);

if(array_key_exists($argv[1], $day))
	echo "$argv[1] found\n";
else
	echo "$argv[1] not found\n";

/*
	preg_replace('Lundi', 'Monday', $argv[1]);
	preg_replace('Mardi', 'Tuesday', $argv[1]);
	preg_replace('Mercredi', 'Wednesday', $argv[1]);
	preg_replace('Jeudi', 'Thursday', $argv[1]);
	preg_replace('Vendredi', 'Friday', $argv[1]);
	preg_replace('Samedi', 'Saturday', $argv[1]);
	preg_replace('Dimanche', 'Sunday', $argv[1]);

	preg_replace('Janvier', 'Monday', $argv[1]);
	preg_replace('Février', 'Tuesday', $argv[1]);
	preg_replace('Mars', 'Wednesday', $argv[1]);
	preg_replace('Avril', 'Thursday', $argv[1]);
	preg_replace('Mai', 'Friday', $argv[1]);
	preg_replace('Juin', 'Saturday', $argv[1]);
	preg_replace('Juillet', 'Sunday', $argv[1]);
	preg_replace('Août', 'Wednesday', $argv[1]);
	preg_replace('Septembre', 'Thursday', $argv[1]);
	preg_replace('Octobre', 'Friday', $argv[1]);
	preg_replace('Novembre', 'Saturday', $argv[1]);
	preg_replace('Décembre', 'Sunday', $argv[1]);

	echo strtotime($argv[1]);

	$date = explode(' ', $argv[1]);


	switch ($date[1]) {
		case 'Lundi':
			# code...
			break;
		
		default:
			# code...
			break;
	}
*/
}
?>