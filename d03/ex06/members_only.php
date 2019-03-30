<?php
// php -S localhost:8100
if($_SERVER['PHP_AUTH_USER'] == 'zaz' && $_SERVER['PHP_AUTH_PW'] == '123')
{
	$image = '../img/42.png';
	$data = base64_encode(file_get_contents($image));
	echo "<html><body>Hello Zaz<br />";
	echo "<img src='data:image/png;base64," . $data ."'>";
	echo "</body></html>";
}
else {
		header("WWW-Authenticate: Basic realm=''Member area''");
		header("HTTP/1.0 401 Unauthorized");
		echo '<html><body>That area is accessible for members only</body></html>';
	}
?>