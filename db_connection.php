<?php

// db_connection.php

$server    = 'localhost';
$db_user   = 'root';
$db_passwd = '';
$database  = 'chng_mgmt';

$db = mysql_connect($server, $db_user, $db_passwd);

if($db)
{
	//echo 'Uspjesno spajanje na bazu';
	
	if(mysql_select_db($database, $db))
	{
		//echo 'Baza uspjesno odabrana';
		mysql_query("SET NAMES utf8");
	}
	else
	{
		echo 'Doslo je do pogreske kod odabrira baze';
	}
}
else
{
	echo 'Doslo je do pogreske kod spajanja na bazu';
}

?>