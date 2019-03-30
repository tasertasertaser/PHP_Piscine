<?php
// php -S localhost:8100

$image = '../img/42.png';

header('Content-type: image/png');
readfile($image);

?>