<?php
/* Database config */
$db_host		= 'localhost';
$db_user		= 'id19905563_abasmalla';
$db_pass		= '@Abas3212206@';
$db_database	= 'id19905563_shoppet'; 
/* End config */

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_database);
// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
