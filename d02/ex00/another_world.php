#! /usr/bin/env php
<?php

echo trim(preg_replace('/[\t ]+/', ' ', $argv[1]));

?>