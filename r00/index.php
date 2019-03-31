<?php

session_start();

echo "<p class=\"title\"><a href=\"index.php\">store.com</a>";

if($_SESSION['admin'] == 'admin'){
	echo " << admin mode >> ";
}
echo "</p>";
echo "<html><head><title>eCommerce Storefront</title><link href=\"styles.css\" rel=\"stylesheet\" type=\"text/css\"></head><body>";
echo "<div class = \"topbar\" id = \"topbar\">";

if($_SESSION['loggued_on_user']){
	echo "<div class=\"navlink\"><a href=\"modif.html\">";
	echo $_SESSION['loggued_on_user'];
	echo "</a></div>";
	echo "<div class=\"navlink\"><a href=\"logout.php\">Logout</a></div>";
}
else{
	echo "<div class=\"navlink\"><a href=\"login.html\">Login</a></div>";
	echo "<div class=\"navlink\"><a href=\"create.html\">Sign Up</a></div>";
}

/* ========== dropdown ========= */

echo "<div class=\"wrapper\">";
echo "<div class=\"dropdown\">";
echo "<button class=\"dropbtn\">SHOP</button>";
echo "<div class=\"dropdown-content\">";
echo "<a href=\"cat1.php\">category 1</a>";
echo "<a href=\"cat2.php\">category 2</a>";
echo "<a href=\"cat3.php\">category 3</a>";
echo "</div></div></div>";


/* ========== extra ========= */

echo "</div>";
echo "<center>";

echo "</center>";

echo "</body></html>";
?>