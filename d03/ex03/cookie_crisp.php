<?php
// php -S localhost:8100
// curl -c cook.txt 'http://localhost:8100/cookie_crisp.php?action=set&name=plat&value=choucroute'
// curl -b cook.txt 'http://localhost:8100/cookie_crisp.php?action=get&name=plat'
// curl -c cook.txt 'http://localhost:8100/cookie_crisp.php?action=del&name=plat'
	
	if(!($_GET['action'] == 'get' || $_GET['action'] == 'set' || $_GET['action'] == 'del'))
		return;
	else if($_GET['action'] == 'set')
	{
		$cookie_Name = $_GET['name'];
		$cookie_Value = $_GET['value'];
		setcookie($cookie_Name, $cookie_Value);
	}
	else if($_GET['action'] == 'get')
	{
		$cookie_Name = $_GET['name'];
		if(isset($_COOKIE[$cookie_Name]))
		{
			echo $_COOKIE[$cookie_Name];
			echo "\n";
		}
	}
	else if($_GET['action'] == 'del')
	{
		$cookie_Name = $_GET['name'];
			echo "deleting cookie";
			setcookie($cookie_Name, NULL, time() - 3600); // wow this is stupid
	}
?>