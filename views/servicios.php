<?php

@session_start();
if (!isset($_SESSION["username"]) && !isset($_COOKIE["cookie"])) {

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="shortcut icon" href="../assets/img/Logofavi.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Productos</a>
            <a href="servicios.php">Servicios</a>
            <a href="#">Contacto</a>
            <a href="login.php">Login</a>

        </nav>

    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://www.clarin.com/img/2020/01/04/los-nuevos-monitores-odyssey-de___eP2uQLlM_340x340__1.jpg" class="img img-responsive">
                    <div class="profile-name">MONITOR</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://i.linio.com/p/a189833b940185663113658b22ef5df5-product.jpg" class="img img-responsive">
                    <div class="profile-name">MOUSE</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://kussytodo.com/wp-content/uploads/2020/10/1-e1603642680230-340x340.png" class="img img-responsive">
                    <div class="profile-name">SILLA GAMER</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://www.clarin.com/img/2020/01/04/los-nuevos-monitores-odyssey-de___eP2uQLlM_340x340__1.jpg" class="img img-responsive">
                    <div class="profile-name">MONITOR</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://i.linio.com/p/a189833b940185663113658b22ef5df5-product.jpg" class="img img-responsive">
                    <div class="profile-name">MOUSE</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://kussytodo.com/wp-content/uploads/2020/10/1-e1603642680230-340x340.png" class="img img-responsive">
                    <div class="profile-name">SILLA GAMER</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>



        </div>
    </div>

    <section>

    </section>
</body>

</html>

<?php
} else {

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>productos</title>
    <link rel="stylesheet" href="../styles/navbar.css">
    <link rel="shortcut icon" href="../assets/img/Logofavi.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
</head>

<body>
    <header>
        <nav>
            <a href="index.html">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Productos</a>
            <a href="servicios.php">Servicios</a>
            <a href="#">Contacto</a>
            <a href=""><?php echo($_COOKIE["username"]);?></a>
            <a href="../controllers/logout.php">  
            <i class="fas fa-sign-out-alt"></i>
            </a>
        </nav>

    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://www.clarin.com/img/2020/01/04/los-nuevos-monitores-odyssey-de___eP2uQLlM_340x340__1.jpg" class="img img-responsive">
                    <div class="profile-name">MONITOR</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://i.linio.com/p/a189833b940185663113658b22ef5df5-product.jpg" class="img img-responsive">
                    <div class="profile-name">MOUSE</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://kussytodo.com/wp-content/uploads/2020/10/1-e1603642680230-340x340.png" class="img img-responsive">
                    <div class="profile-name">SILLA GAMER</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://www.clarin.com/img/2020/01/04/los-nuevos-monitores-odyssey-de___eP2uQLlM_340x340__1.jpg" class="img img-responsive">
                    <div class="profile-name">MONITOR</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://i.linio.com/p/a189833b940185663113658b22ef5df5-product.jpg" class="img img-responsive">
                    <div class="profile-name">MOUSE</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>
            <div class="col-md-4">

                <div class="profile-card-2"><img src="https://kussytodo.com/wp-content/uploads/2020/10/1-e1603642680230-340x340.png" class="img img-responsive">
                    <div class="profile-name">SILLA GAMER</div>
                    <div class="profile-username">A solo $1000</div>
                    <div class="profile-icons"><a class="btn btn-info" href="C:\Users\ASUS-User\Desktop\ESCRITORIO IRVING NO TOCAR\DGS-801\SEGURIDAD DE APLICACIONES\PAGINA WEB COMPRAR ONLINE\tarjeta.html" role="button">Comprar</a></div>
                </div>
            </div>



        </div>
    </div>

    <section>

    </section>
</body>

</html>

<?php

}

?>