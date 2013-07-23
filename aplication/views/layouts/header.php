<?php
session_start();
    include $_SERVER['DOCUMENT_ROOT'].'/pw/Proyecto_FinalPW/aplication/views/site/inicio.php';
?>

<html>

    <head>

        <title>SITEC</title>
        
        <!-- Código del Icono -->
        <link href="<?echo BASE_URL;?>views/bootstrap/img/ICONO.ico" type="image/x-icon" rel="shortcut icon"/>

        <!-- Loading Bootstrap -->
        <link href="<?echo BASE_URL;?>views/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="<?echo BASE_URL;?>views/bootstrap/css/PROYECTO.css" rel="stylesheet">
        <link href="<?echo BASE_URL;?>views/bootstrap/css/style.css" rel="stylesheet" >
        
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js?ver=1.4.2"></script>
        <script src="<?echo BASE_URL;?>views/bootstrap/js/login.js"></script>
        
        <!-- Loading Flat UI -->
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery-1.8.3.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery-ui-1.10.3.custom.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.ui.touch-punch.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/bootstrap.min.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/bootstrap-select.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/bootstrap-switch.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/flatui-checkbox.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/flatui-radio.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.tagsinput.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.placeholder.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/jquery.stacktable.js"></script>
        <script src="http://vjs.zencdn.net/c/video.js"></script>
        <script src="<?echo BASE_URL;?>views/Flat-UI-master/js/application.js"></script>

        <script>
            $(document).ready(function(){
                $('.carousel').carousel({
                    interval: 3000
                });
            });
        </script>

    </head>

    <body background="<?echo BASE_URL;?>views/bootstrap/img/FONDO 3.jpg">

        <div class="container">
            <img src="<?echo BASE_URL;?>views/bootstrap/img/BANNER.jpg" alt="">
            
            <?php
                if(!isset($_SESSION['id_asistente'])){
            ?>
                    <div class="navbar navbar-inverse">
                        <div class="navbar-inner">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="<?echo BASE_URL;?>views/site/inicio.php"><i class="icon-home"></i> Inicio</a>
                                </li>
                                <li class="active">
                                    <a href="<?echo BASE_URL;?>views/site/usuarios.php"><i class="icon-pencil"></i> Registro</a>
                                </li>
                                <li class="active">
                                    <a href="<?echo BASE_URL;?>views/site/actividades.php"><i class="icon-tags"></i> Actividades</a>
                                </li>
                                <li class="active">
                                    <a href="<?echo BASE_URL;?>views/site/eventos.php"><i class="icon-briefcase"></i> Eventos</a>
                                </li>
                                <li class="active">
                                    <div id="loginContainer">
                                        <a href="" id="loginButton"><span><i class="icon-user icon-white"></i> Login</span></a>
                                        <div id="loginBox">                
                                            <form id="loginForm" method="POST" action="<?echo BASE_URL;?>views/site/login.php">
                                                <fieldset id="body">
                                                    <fieldset>
                                                        <label class="control-label" for="email">Email</label>
                                                        <i class="icon-envelope"></i>
                                                        <input id="email" name="email" type="text" maxlength="120" required="text" placeholder="Email" autofocus>
                                                    </fieldset>
                                                    <fieldset>
                                                        <label class="control-label" for="password">Contrase&ntilde;a</label>
                                                        <i class="icon-lock"></i>
                                                        <input id="password" name="password" type="password" maxlength="120" required="text" placeholder="Contrase&ntilde;a">
                                                    </fieldset>
                                                    <input type="submit" id="login" value="Aceptar"/>
                                                    <label for="checkbox"><input type="checkbox" id="checkbox" />Recordar mis datos</label>
                                                </fieldset>
                                                <span><a href="">¿Olvidaste tu contrase&ntilde;a?</a></span>
                                            </form>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
            <?php 
                }
                else{
                    if($_SESSION['id_asistente'] == '1'){
            ?>
                        <div class="navbar navbar-inverse">
                            <div class="navbar-inner">
                                <ul class="nav nav-pills">
                                    <li class="active">
                                        <a href="<?php echo BASE_URL;?>views/site/inicio.php"><i class="icon-home"></i> Inicio</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo BASE_URL;?>views/site/usuarios.php"><i class="icon-pencil"></i> Registro</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo BASE_URL;?>views/site/actividades.php"><i class="icon-tags"></i> Actividades</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo BASE_URL;?>views/admin/Registro_evt_eventos.php"><i class="icon-briefcase"></i> Eventos</a>
                                    </li>
                                    <li class="active">
                                        <a href="<?php echo BASE_URL;?>views/site/asistentes.php"><i class="icon-book"></i> Asistentes</a>
                                    </li>                        
                                    <li class="active dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="icon-list-alt"></i> Tipos de usuarios
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a tabindex="-1" href="<?php echo BASE_URL;?>views/site/tipos_usuarios.php"><i class="icon-ok-circle"></i> Usuarios</a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="<?php echo BASE_URL;?>views/site/asistentes_tipos_usuarios.php"><i class="icon-bookmark"></i> Asistentes</a>
                                            </li>
                                            <li>
                                                <a tabindex="-1" href="<?php echo BASE_URL;?>views/site/eventos_tipos_usuarios.php"><i class="icon-folder-open"></i> Eventos</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="active dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                            <i class="icon-user"></i> <?php echo $_SESSION['nombre']; ?>
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a tabindex="-1" href="<?php echo BASE_URL;?>views/site/logout.php"><i class="icon-off"></i> Cerrar sesion</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
            <?php
                    }
                    else{
                        if($_SESSION['id_asistente'] > '1'){
            ?>
                            <div class="navbar navbar-inverse">
                                <div class="navbar-inner">
                                    <ul class="nav nav-pills">
                                        <li class="active">
                                            <a href="<?php echo BASE_URL;?>views/site/inicio.php"><i class="icon-home"></i> Inicio</a>
                                        </li>
                                        <li class="active">
                                            <a href="<?php echo BASE_URL;?>views/site/actividades.php"><i class="icon-tags"></i> Actividades</a>
                                        </li>
                                        <li class="active">
                                            <a href="<?php echo BASE_URL;?>views/site/eventos.php"><i class="icon-briefcase"></i> Eventos</a>
                                        </li>
                                        <li class="active dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                                                <i class="icon-user"></i> <?php echo $_SESSION['nombre']; ?>
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li>
                                                    <a tabindex="-1" href="<?php echo BASE_URL;?>views/site/logout.php"><i class="icon-off"></i> Cerrar sesion</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
            <?php
                        }
                    }
                }
            ?>
