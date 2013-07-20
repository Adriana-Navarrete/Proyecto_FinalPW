<?php
include $_SERVER['DOCUMENT_ROOT'].'/PROYECTO_FINAL/proyecto_final/aplication/config.ini.php';
?>
<html>

    <head>

        <title>SITEC</title>

        <!-- Loading Bootstrap -->
        <link href="<?echo BASE_URL;?>views/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?echo BASE_URL;?>views/bootstrap/css/PROYECTO.css" rel="stylesheet">

        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                });
            });
        </script>

    </head>

    <body background="<?echo BASE_URL;?>views/bootstrap/img/FONDO.jpg">

        <div class="container">
            <img src="<?echo BASE_URL;?>views/bootstrap/img/BANNER.jpg" alt="">

            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <ul class="nav nav-pills">
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/inicio.php">Inicio</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_login.php">Login</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_usuarios.php">Registro</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_actividades.php">Actividades</a>
                        </li>
                        <li class="active">
                            <a href="<?echo BASE_URL;?>views/site/form_eventos.php">Eventos</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container">