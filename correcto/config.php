<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'pruebas.cjaya8wvxq54.us-east-2.rds.amazonaws.com');
define('DB_USERNAME', 'admin504');
define('DB_PASSWORD', 'eO08Wh2Dan36');
define('DB_NAME', 'pruebas');
define('PORT', '3306');
 


/*attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, PORT);
 
// Check connection
if($mysqli ->connect_errno){
    echo "la conexion fallo. ¿Qué vamos a hacer? ";
    echo "Error:  Fallo al conectarse a MySQL debido a: \n";
    echo "Errno : " . $conexion->connect_errno . "\n";
    echo "Error : " . $conexion->connect_error . "\n";
}
?>