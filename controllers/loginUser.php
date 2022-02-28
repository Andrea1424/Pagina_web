<?php

//Login para entrar al sistema
$correo = $_POST["correo"];
$pass = md5($_POST["password"]);
if(isset($_POST["conected"])){
    $button_session = $_POST["conected"];
}

//Si recibe la variable $user y $pass para entrar a este if, en caso de no recibirlos envia a el último else
if(isset($correo) AND isset($pass)){
    require("../config/conexion.php"); //Necesitamos el archivo en donde viene la conexión de la base de datos
    //Consulta en la base de datos si hay algún registro que coincida con con los parametros recibidos
    $log = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '".$correo ."' AND pass = '".$pass."'");
    if($log->num_rows > 0){//Encontro un registro igual
        while($row = mysqli_fetch_array($log)){ //Este arreglo trae todos los campos de la tabla para utilizarlos despues
            if(isset($button_session)){
                @session_start();   //Se incia una sesión
                $_SESSION["username"] = $row["usuario"]; //Almacenamos el usuario, password, cargo 
                $_SESSION["password"] = $_POST["password"];
                setcookie("username", $row['usuario'], time() + 3600, "/");
            }else{
                setcookie("cookie", "temporal", time() + 3600, "/");
                setcookie("username", $row['usuario'], time() + 3600, "/");
            }
        }
        //Envia a la ventana home ya que si pudo ingresar
        echo"<script type='text/javascript'>
            window.location='../views/home.php';
            </script>";
    }else{//No econtro ningun registro con esos datos
        //Envia a la ventana login de nuevo para entrar de nuevo
        echo"<script type='text/javascript'>
            window.location='../views/login.php';
            </script>";
    }
}else{//Datos vacios, este else esta unido al primer if
    //Envia a la ventana login para ingresar datos
    echo"<script type='text/javascript'>
            window.location='../views/login.php';
            </script>";
}
?>