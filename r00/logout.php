<?php

session_start();

$_SESSION['loggued_on_user'] = '';
if(isset($_SESSION['admin'])){
	$_SESSION['admin'] = '';
}
header("Location: http://localhost:8100/index.php");
	die();


?>