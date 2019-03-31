<?php
// php -S localhost:8100

	session_start();

	$usercount = 0;
	if($_POST['submit'] == 'OK'){
		if($_POST['login'] && $_POST['passwd']){
			if(file_exists('./private/passwd')){
				$passwdFile = unserialize(file_get_contents('./private/passwd'));
				foreach ($passwdFile as $user){
					$usercount++;
					if($_POST['login'] == $user['login']){
						echo "ERROR -- user exists\n";
						return;
					}
				}
					$hashPass = hash('whirlpool', $_POST['passwd']);
					$passwdFile[$usercount] = array('login'=>$_POST['login'], 'passwd'=>$hashPass);
					file_put_contents('./private/passwd', serialize($passwdFile));
					echo "OK\n";
					return;
				
			}
			else{
				$hashPass = hash('whirlpool', $_POST['passwd']);
				$passwdFile['0'] = array('login'=>$_POST['login'], 'passwd'=>$hashPass);
				mkdir('./private');
				file_put_contents('./private/passwd', serialize($passwdFile));
			}
		}
		else{
			echo "ERROR -- not enough input\n";
			return;
		}
		echo "OK\n";
	}
	else{
		echo "ERROR -- sumbit != OK\n";
		return;
	}

?>