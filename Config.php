<?php
// Mysql host
$host = '';
// Mysql gebruikersnaam
$user = '';
// Mysql wachtwoord
$pass = '';
// Mysql database naam
$datb = 'webapplicatie';

mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($datb);
?>