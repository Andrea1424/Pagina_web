<?php

//Sesiones
@session_start();
session_destroy();
setcookie("cookie", "temporal", time() + -60, "/");
setcookie("username", $row['user'], time() + -60, "/");
header("Location: ../index.php");

?>