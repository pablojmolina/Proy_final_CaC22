<?php include "coneccion.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Pablo Molina - Web Page</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/devicon.min.css">
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand" href="#page-top"><img src="assets/img/Pablo Molina.svg" alt="..." /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars ms-1"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <!-- <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Portfolio</a></li>
                    <li class="nav-item"><a class="nav-link" href="#acercade">Acerca de</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="#equipo">Equipo</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <header class="masthead">
        <div class="container">
            <!--<div class="masthead-subheading">Bienvenidos a mi Portfolio!</div>-->
            <!--<div class="masthead-heading text-uppercase">Bienvenidos a mi Portfolio!</div>-->
            <!--<div class="typewriter">
                <h1>Pablo Molina - Full Stack Developer Junior.</h1>
            </div>-->
            <div class="typewriter">
                <h1>
                    <a href="" class="typewrite" data-period="2000"
                        data-type='[ "Hola.", "Bienvenidos a mi Portolio!", "Pablo Molina.", "Full Stack Developer Junior." ]'>
                        <span class="wrap"></span>
                    </a>
                </h1>
            </div>
            <a class="btn btn-primary btn-xl text-uppercase btn-margin" href="#portfolio">Portfolio</a>
        </div>
    </header>

    <!-- Skills-->
    <section id="skills">
        <!--  <div class=row> -->
        <div class="col-md-12 center-block d-flex justify-content-center">
            <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
            <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_jtbfg2nb.json" background="transparent"
                speed="1" style="width: 600px; height: 400px;" loop autoplay>
            </lottie-player>
            <!-- <iframe src="https://embed.lottiefiles.com/animation/91382"></iframe> -->
        </div>
        <div class="col-md-12 center-block justify-content-center">
            <div class="col-md-12 text-center">
                <h1 class="section-title"><span class="">Mis conocimientos</span></h1>
            </div>
            <div class="col-md-12 text-center">
                <ul class="list-inline mx-auto skill-icon">
                    <li class="list-inline-item mx-3"><span>
                            <div class="text-center skills-tile"><i class="devicon-html5-plain"
                                    style="font-size: 220%;">
                                    <p class="text-center" style="font-size: 40%; margin-top: 4px;">HTML 5</p>
                                </i></div>
                        </span></li>
                    <li class="list-inline-item mx-3"><span>
                            <div class="text-center skills-tile"><i class="devicon-css3-plain" style="font-size: 220%;">
                                    <p class="text-center" style="font-size: 40%; margin-top: 4px;">CSS 3</p>
                                </i></div>
                        </span></li>

                    <li class="list-inline-item mx-3"><span>
                            <div class="text-center skills-tile"><i class="devicon-javascript-plain"
                                    style="font-size: 220%;">
                                    <p class="text-center" style="font-size: 40%; margin-top: 4px;">JavaScript</p>
                                </i></div>
                        </span></li>
                    <li class="list-inline-item mx-3"><span>
                            <div class="text-center skills-tile"><i class="devicon-bootstrap-plain"
                                    style="font-size: 220%;">
                                    <p class="text-center" style="font-size: 40%; margin-top: 4px;">Bootstrap</p>
                                </i></div>
                        </span></li>
                    <li class="list-inline-item mx-3"><span>
                            <div class="text-center skills-tile"><i class="devicon-php-plain" style="font-size: 220%;">
                                    <p class="text-center" style="font-size: 40%; margin-top: 4px;">PHP</p>
                                </i></div>
                        </span></li>
                    <li class="list-inline-item mx-3"><span>
                            <div class="text-center skills-tile"><i class="devicon-mysql-plain"
                                    style="font-size: 220%;">
                                    <p class="text-center" style="font-size: 40%; margin-top: 4px;">MySql</p>
                                </i></div>
                        </span></li>
                </ul>
            </div>
        </div>
        <!-- </div> -->
    </section>


    <!-- Portfolio Grid-->
    <section class="page-section bg-light" id="portfolio">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Portfolio</h2>
                <h3 class="section-subheading text-muted">Estos son mis trabajos como developer.</h3>
            </div>
            <div class="row">
                <!-- LEVANTO LOS DATOS DE LA BD ------->
                <?php
                        $sql=$conexion->query(" select * from proyectos ");
                        while($datos=$sql->fetch_object()){ 
                            $id= "a" . strval($datos->id) ;
                            $nom=$datos->nombre ;
                            $img=$datos->imagen ;
                            $des=$datos->descripcion ;
                    ?>
                <!-- TERMINA PHP  ------->
                <!-- Portfolio item 1-->
                <div class="col-lg-4 col-sm-6 mb-4">
                    <div class="portfolio-item div_gradient">
                        <a class="portfolio-link" data-bs-toggle="modal" href="#<?= $id?>">
                            <div class="portfolio-hover">
                                <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                            </div>
                            <img class="img-fluid" src="<?= $img?>" alt="..." />
                        </a>
                        <div class="portfolio-caption">
                            <div class="portfolio-caption-heading"><?= $nom?></div>
                            <div class="portfolio-caption-subheading text-muted"><?= $des?></div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <!-- Portfolio Modals--- Portfolio modal popup-->
    <!-- LEVANTO LOS DATOS DE LA BD ------->
    <?php
                        $sql=$conexion->query(" select * from proyectos ");
                        while($datos=$sql->fetch_object()){ 
                            $id= "a" . strval($datos->id) ;
                            $nom=$datos->nombre ;
                            $img=$datos->imagen ;
                            $des=$datos->descripcion ;
                    ?>
    <div class="portfolio-modal modal fade" id="<?= $id?>" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="close-modal" data-bs-dismiss="modal"><img src="assets/img/close-icon.svg"
                        alt="Close modal" /></div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="modal-body">
                                <!-- Project details-->
                                <h2 class="text-uppercase"><?= $nom?></h2>
                                <p class="item-intro text-muted"><?= $des?></p>
                                <img class="img-fluid d-block mx-auto" src="<?= $img?>" alt="..." />
                                <p></p>
                               <!--  <ul class="list-inline">
                                    <li>
                                        <strong>Cliente:</strong>
                                    </li>
                                    <li>
                                        <strong>Categoria:</strong>
                                    </li>
                                </ul> -->
                                <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                    type="button">
                                    <i class="fas fa-xmark me-1"></i>
                                    Cerrar
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php }    
    ?>
    <!-- Seccion Quien soy-->
    <section class="page-section bg-dark" id="acercade">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Quien soy</h2>
                <h3 class="section-subheading text-muted"> <a href="cv.pdf">Curriculum Vitae.</a></h3>
            </div>
            <div class="row">

                <div class="d-flex justify-content-center">
                    <div class="team-member">
                        <img class="mx-auto rounded-circle" src="assets/img/team/3.jpg" alt="..." />
                        <h4>Pablo Molina</h4>
                        <p class="text-muted">Programador Junior</p>
                        <a class="btn btn-warning text-dark btn-social mx-2" href="#!"
                            aria-label="Pablo Molina Cuenta de Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-warning text-dark btn-social mx-2" href="#!"
                            aria-label="Pablo Molina Cuenta de Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-warning text-dark btn-social mx-2" href="#!"
                            aria-label="Pablo Molina Perfil LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <p class="large text-muted">Programador Junior: HTML, CSS, JavaScript, Bootstrap, PHP, MySQL.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <!-- Contact-->
    <section class="page-section" id="contacto">
        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Ponte en Contacto</h2>
                <h3 class="section-subheading text-muted">Si deseas que te enviemos mas informacion dejanos tus datos.
                </h3>
            </div>
            <form>
                <!--Body-->
                <div class="md-form">
                    <label for="Form-email3">Nombre</label>
                    <input type="text" id="Form-name3" class="form-control mb-4">
                </div>
                <div class="md-form">
                    <label for="Form-pass3">E-mail</label>
                    <input type="text" id="Form-mail3" class="form-control mb-4">
                </div>
                <div class="md-form">
                    <label for="message5">Mensaje</label>
                    <textarea type="text" id="message5" name="message5" rows="2"
                        class="form-control md-textarea mb-4"></textarea>
                    <div class="form-group">
                    </div>
                </div>
                <!-- Submit Button-->
                <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled"
                        id="submitButton" type="submit">Enviar Mensaje</button></div>
            </form>
        </div>
    </section>
    <!--fin Form contacto -->

    <!-- Footer-->
    <footer class="footer py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 text-lg-start">Copyright &copy; Pablo Molina 2022</div>
                <div class="col-lg-4 my-3 my-lg-0">
                    <a class="btn btn-danger btn-social mx-2" href="#!" aria-label="Twitter"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-danger btn-social mx-2" href="#!" aria-label="Facebook"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-danger btn-social mx-2" href="#!" aria-label="LinkedIn"><i
                            class="fab fa-linkedin-in"></i></a>
                </div>
                <div class="col-lg-4 text-lg-end">
                    <a class="text-light text-decoration-none me-3" href="#!">Politica de Privacidad</a>
                    <a class="text-light text-decoration-none" href="#!">Terminos de Uso</a>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <script src="js/typewriter.js"></script>
</body>

</html>