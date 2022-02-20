<?php
@session_start();
if (isset($_SESSION["username"])) {
    header("Location: home.php");
}else if(isset($_COOKIE["cookie"])){
    header("Location: home.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body {
            background: #ffe259;
            background: linear-gradient(to right, #E2F4BB, #E9F7CA);
        }
        
        .bg {
            background-image: url('https://www.altonivel.com.mx/assets/images/Estructura_2015/Consultoria/Recursos_Humanos/ingenieria-oportunidades.jpg');
            background-position: center center;
        }
    </style>
</head>

<body>

    <div class="container w-75 bg-primary mt-5 rounded shadow">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col bg-white p-5 rounded-end">

                <h2 class="fw-bold text-center pt-2 mb-5">Bienvenido</h2>

                <form action="../controllers/loginUser.php" method="post">
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico</label>
                        <input type="email" class="form-control" name="correo" placeholder="correo@dominio.com">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" minlength="6" maxlength="20" placeholder="********">
                        <span style="color: red; font-size: 12px;">La contraseña es mayor a 8 caracteres</span>
                    </div>
                    <div class="mb-4 form-check">
                        <input type="checkbox" name="conected" class="form-check-input" value="true">
                        <label for="conected" class="form-check-label">Mantenerme conectado</label>
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary"> Iniciar sesión</button>
                    </div>

                    <div class="my-3">
                        <span>¿No tienes Cuenta? <a href="registro.html">Registrate</a></span>
                    </div>
                </form>


            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>