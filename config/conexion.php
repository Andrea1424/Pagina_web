<?php

$usr = "root";
$pw = "";
$db = "sitiowebut";
$host = "localhost";

try {
    $conexion = new mysqli($host, $usr, $pw, $db);
    $conexion->set_charset("utf8");
    if ($conexion->connect_errno) {
        die("La conexión ha fallado" . $conexion->connect_errno);
    }
} catch (mysqli_sql_exception $e) {
    throw $e;
}

?>