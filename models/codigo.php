<?php 

$correo = $_GET["correo"];
$codigo = $_GET["codigo"];
if(isset($codigo)){

if($codigo == "xd"){
    echo "<script type=\"text/javascript\"> alert (\"Correcto\"); </script>";
    echo"<script type='text/javascript'>
        window.location='../views/home.php';
        </script>";
}else{
    //Sesiones
    @session_start();
    session_destroy();
    setcookie("cookie", "temporal", time() + -60, "/");
    setcookie("username", $row['user'], time() + -60, "/");
    echo "<script type=\"text/javascript\"> alert (\"Código no válido\"); </script>";
    echo"<script type='text/javascript'>
        window.location='../views/login.php';
        </script>";
}

}
?>