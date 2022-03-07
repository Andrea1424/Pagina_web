<?php 
$correo = $_GET['correo'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código</title>
    <link rel="stylesheet" href="../styles/header3.css">
    <link rel="shortcut icon" href="assets/img/Logofavi.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background: linear-gradient(to right, #f7ffe6, #edf1e3);
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Productos</a>
            <a href="servicios.php">Servicios</a>
            <a href="#">Contacto</a>
            <a href="login.php">login</a>

        </nav>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(255, 255, 255);"></path>
            </svg></div>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-6 offset-6">
                <form action="../models/codigo.php" method="post">
                    <div class="col-6">
                        <div class="text-center" style="font-size: 25px; font-weight: bolder;">
                            Registro de Usuario
                        </div><br>
                        <label for="exampleInputEmail1" class="form-label">Escribe el código que recibiste en tu correo</label>
                        <input type="text" name="codigo" maxlength="6" class="form-control"
                            placeholder="******" required>
                        <input type="hidden" value=<?php echo $correo ?> name="correo">
                        <br>
                        <div class="text-center">
                            <button type="submit" class="btn btn-success">Registrarse</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</body>

</html>