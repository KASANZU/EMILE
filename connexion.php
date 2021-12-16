<?php

$DB_serveur = 'localhost';
$DB_utilisateur = 'root';
$DB-motdepasse = '';
$DB_base = 'siteweb';

$connection = mysql_connect($DB_serveur, $DB_utilisateur, $DB_motdepasse)
or die (mysql_error().'sur la ligne'.__LINE__);

mysql_select_db($DB_base, $connection)
or die (mysql_error().'sur la ligne'.__LINE__);
$url_home = 'index.php';
$design = 'default';
?>