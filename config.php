<?php
ob_start();
session_start();

define('DBHOST','localhost');
define('DBUSER','database username');
define('DBPASS','database password');
define('DBNAME','database name');

$db = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


date_default_timezone_set('Europe/Prague');