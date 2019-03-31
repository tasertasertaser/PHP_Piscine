<?php

$items[] = array('item'=>'thing1', 'price'=>10, 'cat1'=>'yes', 'cat2'=>'yes', 'cat3'=>'');
$items[] = array('item'=>'thing2', 'price'=>10, 'cat1'=>'yes', 'cat2'=>'', 'cat3'=>'');
$items[] = array('item'=>'thing3', 'price'=>10, 'cat1'=>'', 'cat2'=>'yes', 'cat3'=>'yes');
$items[] = array('item'=>'thing4', 'price'=>10, 'cat1'=>'yes', 'cat2'=>'', 'cat3'=>'yes');

if(!file_exists('./private'))
	mkdir('./private');
file_put_contents('./private/items', serialize($items));

?>