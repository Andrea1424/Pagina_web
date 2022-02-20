<?php

//Verificamos si existe una sesion
if(isset($_SESSION["username"])){
    header("Location: ./views/home.php");
}else{
    //Llamamos al login
    header("Location: ./views/index.html");
}

?>