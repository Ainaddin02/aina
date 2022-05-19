<?php

$server = 'localhost';
$username = 'postgres';
$password = 'ainaddin';
$db_name = 'sewerage';

$dbconn = pg_connect("host=$server port=5432 dbname=$db_name user=$username password=$password");


?>