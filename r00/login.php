<?php

echo "<p class=\"title\"><a href=\"index.php\">store.com</a></p>";
echo "<html><head><title>eCommerce Storefront</title><link href=\"styles.css\" rel=\"stylesheet\" type=\"text/css\"></head><body>";
echo "<div class = \"topbar\" id = \"topbar\">";

include 'auth.php';

session_start();

if ($_POST['submit'] == "OK" && auth($_POST['login'], $_POST['passwd'])){
	$_SESSION['loggued_on_user'] = $_POST['login'];
	if($_POST['login'] == "Rafael" || $_POST['login'] == "Crystal"){
		$_SESSION['admin'] = 'admin';
	}
	header("Location: http://localhost:8100/index.php");
	die();
}
else{
	$_SESSION['loggued_on_user'] = "";
	echo "wrong username or password\n";
	echo "<p><a href=\"login.html\">retry</a>";
}

echo "</div>";
echo "</body></html>";

?>