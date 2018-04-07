<!-- Permet d'établir la connexion à notre base MySQL -->
<?php
	$hote 	= 'localhost';
	$base 	= 'graphe';
	$user 	= 'root';
	$pass 	= 'root';
	$cnx 	= mysql_connect($hote, $user, $pass) or die(mysql_error());
	$ret 	= mysql_select_db($base) or die(mysql_error());
?>