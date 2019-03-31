<?php
// php -S localhost:8100

	session_start();

	if($_GET['submit'] == 'OK'){
		if($_GET['login']){$_SESSION['login'] = $_GET['login'];}
		if($_GET['passwd']){$_SESSION['passwd'] = $_GET['passwd'];}
	}
	if($_SESSION['login']){
		$login = $_SESSION['login'];
	}
	if($_SESSION['passwd']){
		$passwd = $_SESSION['passwd'];
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>index</title>
</head>
<body>
	<p>
	<form method="get" action="index.php" name="index.php">
		Login:<input type="text" name="login" value="<?php echo $login ?>"><br/>
		Password:<input type="password" name="passwd" value="<?php echo $passwd ?>"><br/>
		<input type="submit" value="OK" name="submit">
</body>
</html>