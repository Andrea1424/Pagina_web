<?php 

    $nombre = $_POST["nombre"]; //Por metodo POST se reciben los datos que utilizaremos
    $ap_p = $_POST["ap_p"];
    $ap_m = $_POST["ap_m"];
    $correo = $_POST["correo"];
    $user = $_POST["usuario"];
    $pass = $_POST["pass"];

    require("../config/conexion.php"); //Necesitamos el archivo en donde viene la conexión de la base de datos
    //Consulta en la base de datos si hay algún registro que coincida con con los parametros recibidos
    $log = mysqli_query($conexion, "SELECT * FROM users WHERE correo = '".$correo ."'");
    if($log->num_rows > 0){//Encontro un registro igual
        echo "<script type=\"text/javascript\"> alert (\"Correo ya registrado\"); </script>";
        echo "<script type='text/javascript'>
        window.location='../views/registro.html';
        </script>";
    }
    //Inserta los datos de un empleado a su tabla correspondiente
    $agregarEmpleado = mysqli_query($conexion, "INSERT INTO `users` (`id_usuarios`, `nombre`, `apellido_paterno`, `apellido_materno`, `correo`, `usuario`, `pass`) 
    VALUES (NULL, '" . $nombre . "', '" . $ap_p . "', '" . $ap_m . "', '" . $correo . "', '" . $user . "', '" . $pass . "');");
    //If la consulta es correcta enviará esta ventana emergente
    if ($agregarEmpleado) {
        @session_start();   //Se incia una sesión
        $_SESSION["username"] = $_POST["usuario"]; //Almacenamos el usuario, password, cargo 
        $_SESSION["password"] = $_POST["pass"];
        setcookie("username", $_POST["usuario"], time() + 3600, "/");
        echo "<script type=\"text/javascript\"> alert (\"Registro correcto\"); </script>";
        echo "<script type='text/javascript'>
        window.location='../views/home.php';
        </script>";
    }

?>