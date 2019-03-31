<?php
// php -S localhost:8100

echo "<a href=\"index.php\">store.com</a>";
echo "<html><head><title>eCommerce Storefront</title><link href=\"styles.css\" rel=\"stylesheet\" type=\"text/css\"></head><body>";
echo "<div class = \"topbar\" id = \"topbar\"></div>";
if(isset($_SESSION['loggued_in_user'])){
	echo $_SESSION['loggued_in_user'];
}

	session_start();

	if($_POST['submit'] == 'OK' && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw']){
		$passwdFile = unserialize(file_get_contents('./private/passwd'));
		$oldHashpass = hash('whirlpool', $_POST['oldpw']);
		$newHashpass = hash('whirlpool', $_POST['newpw']);
		foreach ($passwdFile as &$user){ // can also do: foreach ($passwdFile as $user=>$duckies){
			if($_POST['login'] == $user['login']){
				if($oldHashpass == $user['passwd']){
					$user['passwd'] = $newHashpass;
					file_put_contents('./private/passwd', serialize($passwdFile));
					header("Location: http://localhost:8100/index.php");
					die();
					return;
				}
			}
		}
		echo "ERROR\n";
	}
	else{
		echo "ERROR\n";
		return;
	}
?>