<?php
// php -S localhost:8100

echo "<a href=\"index.php\">store.com</a>";
echo "<html><head><title>eCommerce Storefront</title><link href=\"styles.css\" rel=\"stylesheet\" type=\"text/css\"></head><body>";
echo "<div class = \"topbar\" id = \"topbar\"></div>";

	session_start();

	$usercount = 0;
	if($_POST['submit'] == 'OK'){
		if($_POST['login'] && $_POST['passwd']){
			if(file_exists('./private/passwd')){
				$passwdFile = unserialize(file_get_contents('./private/passwd'));
				foreach ($passwdFile as $user){
					$usercount++;
					if($_POST['login'] == $user['login']){
						echo "<center><div class=\"box1\">";
						echo "ERROR";
						echo "<p class=\"subhead\">user exists</p>\n";
						echo "</div></center>";
						return;
					}
				}
					$hashPass = hash('whirlpool', $_POST['passwd']);
					$passwdFile[$usercount] = array('login'=>$_POST['login'], 'passwd'=>$hashPass);
					file_put_contents('./private/passwd', serialize($passwdFile));
					$_SESSION['loggued_on_user'] = $_POST['login'];
					header("Location: http://localhost:8100/index.php");
					die();
					
				
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
		echo "user ";
		echo $_POST['login'];
		echo " created\n";
		return;
	}
	else{
		echo "ERROR -- sumbit != OK\n";
		return;
	}
echo "</body></html>";
?>