<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio photo</title>
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Contact-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Features-Boxed.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Highlight-Phone.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/animate.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/lightbox.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Lightbox-Gallery.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Login-Form-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Map-Clean.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Navigation-with-Button.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Newsletter-Subscription-Form.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Projects-Horizontal.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Registration-Form-with-Photo.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Simple-Slider.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styles.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/Team-Boxed.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/galeria.css">
</head>

<body>
    <div>
        <nav class="navbar navbar-light navbar-expand-md navigation-clean-button">
            <div class="container"><a class="navbar-brand" href="<?php echo base_url();?>/index.php/Admin/administrar">Studio X</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url();?>/index.php/Admin/usuarios">Gestionar usuarios</a></li>
                        <li class="dropdown">
                            <a class="dropdown-toggle nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false" href="<?php echo base_url();?>/index.php/Home/acerca">Galeria y Carusel</a>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>/index.php/Admin/galeria">Actualizar galeria</a>
                                <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>/index.php/Admin/carrusel">Actualizar carrusel</a>
                            </div>
                        </li>
                        <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url();?>/index.php/Admin/datos">Actualizar datos</a></li>
                    </ul>
                    <span class="navbar-text actions"> 
                        <a href="<?php echo base_url();?>/index.php/Admin/crearUsuario" class="login">Crear Usuario</a>
                        <a class="btn btn-light action-button" role="button" href="<?php echo base_url();?>/">Cerrar sesión</a>
                    </span>
                </div>
            </div>
        </nav>
    </div>