<?php
@session_start();
if (!isset($_SESSION["username"]) && !isset($_COOKIE["cookie"])) {
  header("Location: login.php");
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pagina web</title>
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="shortcut icon" href="assets/img/Logofavi.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

</head>

<body>
    <header>
        <nav>
            <a href="#">Inicio</a>
            <a href="#">Acerca de</a>
            <a href="#">Productos</a>
            <a href="#">Servicios</a>
            <a href="#">Contacto</a>
            <a><?php echo($_COOKIE["username"]);?></a>
            <a href="../controllers/logout.php">  
            <i class="fas fa-sign-out-alt"></i>
            </a>
        </nav>
        <section class="textos-header">

            <h1>Los mejores productos a los mejores precios</h1>
            <h2>El mejor sitio para estudiantes </h2>
        </section>
        <div class="wave" style="height: 150px; overflow: hidden;"><svg viewBox="0 0 500 150" preserveAspectRatio="none"
                style="height: 100%; width: 100%;">
                <path d="M0.00,49.99 C150.00,150.00 349.20,-49.99 500.00,49.99 L500.00,150.00 L0.00,150.00 Z"
                    style="stroke: none; fill: rgb(255, 255, 255);"></path>
            </svg></div>
    </header>
    <main>
        <section class="contenedor sobre-nosotros">
            <h2 class="titulo">Nosotros</h2>
            <div class="contenedor-sobre-nosotros">
                <img src="../assets/img/pinta5.png" alt="" class="imagen-about-us">
                <div class="contenido-textos">
                    <h3><span>1</span> ¿Quienes somos?
                    </h3>
                    <p>Somos una plataforma formada por profesionales con experiencia en el desarrollo, ingeniería de
                        servicios e integración de soluciones en el ámbito de las tecnologías de la información. A
                        través de nuestros productos y servicios e, nos
                        hemos puesto como objetivo lograr la satisfacción y rentabilidad de nuestros clientes, por medio
                        de la implementación de soluciones hechas a la medida de su empresa o negocio.
                    </p>
                    <h3><span>2</span>¿Que hacemos?
                    </h3>
                    <p>- Ofrecer servicios de calidad y valor agregado a nuestros clientes</p>
                    <p>- Mejorar el nivel de satisfacción de los clientes Desarrollar una mejora constante en los
                        procesos para dar un mejor servicio</p>
                    <p>- Maximizar el valor de la empresa - Motivación constante de nuestro equipo de trabajo </p>
                </div>
            </div>
        </section>
        <section class="portafolio">
            <div class="contenedor">
                <h2 class="titulo2">Productos Destacados</h2>
                <div class="galeria-port">
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta.jpg" alt="">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png" alt="">
                            <p>Ir a productos</p>

                        </div>

                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta8.jpg">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta2.jpg">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>

                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta3.jpg">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta4.png">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta5.jpg">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>

                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta6.jpg">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>
                    </div>
                    <div class="imagen-port">
                        <img src="../assets/img/tarjeta7.jpg">
                        <div class="hover-galeria">
                            <img src="../assets/img/hover.png">
                            <p>Ir a productos</p>

                        </div>

                    </div>
                </div>
            </div>

            </div>
        </section>
        <section>
            <div class="clientes contenedor">
                <h2 class="titulo">Opiniones de nuestro clientes</h2>
                <div class="cards">
                    <div class="card">
                        <img src="../assets/img/perfil1.jpg" alt="">
                        <div class="contenido-texto-card">
                            <h4>Maria</h4>
                            <p>"Muy profesionales, gran confianza por el servicio y trato. Valoramos muchísimo su gran
                                creatividad en cuanto al diseño de la web, hace que la tienda virtual sea de una gran
                                calidad"</p>
                        </div>

                    </div>
                    <div class="card">
                        <img src="../assets/img/perfil2.png" alt="">
                        <div class="contenido-texto-card">
                            <h4>Manuelito</h4>
                            <p>"Grandes profesionales, serios, eficaces, creativos, actualizados y con gran capacidad de
                                respuesta"</p>
                        </div>

                    </div>
                </div>
            </div>

        </section>
        <section class="about-services">
            <div class="contenedor">
                <h2 class="titulo">Nuestros servicios</h2>
                <div class="servicio-cont">
                    <div class="servicio-ind" alt="">
                        <img src="../assets/img/mante.png" alt="">
                        <h3>Mantenimiento</h3>
                        <p>Mas informacion
                        </p>

                    </div>
                    <div class="servicio-ind" alt="">
                        <img src="../assets/img/software.png" alt="">
                        <h3>Software</h3>
                        <p>Mas informacion
                        </p>
                    </div>
                    <div class="servicio-ind" alt="">
                        <img src="../assets/img/hadware.png" alt="">
                        <h3>Hadware</h3>
                        <p>Mas informacion
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer>
        <div class="contenedor-footer">
            <div class="content-foo">
                <h4>Numero</h4>
                <p>9512616511</p>

            </div>
            <div class="content-foo">
                <h4>Email</h4>
                <p>UTTI19@UTVCO.EDU.MX</p>

            </div>
            <div class="content-foo">
                <h4>Ubicacion</h4>
                <p>San Pablo Huixtepec</p>

            </div>
        </div>
        <h2 class="titulo-final">&copy; Equipo 2 | DGS-801 </h2>
    </footer>
</body>

</html>