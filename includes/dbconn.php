<?php
/* Database config */
$db_host		= 'us-cluster-east-01.k8s.cleardb.net';
$db_user		= 'bd52157b8a0ec4';
$db_pass		= '663ea7a3';
$db_database	= 'heroku_f460bdcbafa30cf'; 
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
