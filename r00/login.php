<?php

include 'auth.php';

session_start();

if (auth($_POST['login'], $_POST['passwd'])){
	echo $_POST['login'];
	$_SESSION['loggued_on_user'] = $_POST['login'];
	echo $_SESSION['loggued_on_user'];
	echo "OK\n";
}
else{
	$_SESSION['loggued_on_user'] = "";
	echo "ERROR\n";
}

?>