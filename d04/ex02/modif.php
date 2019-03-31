<?php
// php -S localhost:8100

	session_start();

	if($_POST['submit'] == 'OK' && $_POST['login'] && $_POST['oldpw'] && $_POST['newpw']){
		$passwdFile = unserialize(file_get_contents('../private/passwd'));
		$oldHashpass = hash('whirlpool', $_POST['oldpw']);
		$newHashpass = hash('whirlpool', $_POST['newpw']);
		foreach ($passwdFile as &$user){ // can also do: foreach ($passwdFile as $user=>$duckies){
			if($_POST['login'] == $user['login']){
				if($oldHashpass == $user['passwd']){
					$user['passwd'] = $newHashpass;
					file_put_contents('../private/passwd', serialize($passwdFile));
					echo "OK\n";
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