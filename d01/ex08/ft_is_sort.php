#! /usr/bin/env php
<?php

function ft_is_sort($tab)
{
	$sorted = array_values($tab);
	sort($sorted);

	if ( $tab === $sorted )
		return true;
	else
		return false;
}
?>
