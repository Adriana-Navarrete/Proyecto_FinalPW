<?php
session_start();
    include('../layouts/header.php');

?>

<?php
    if(isset($_SESSION['id_asistente'])){
?>

<div class="container">
    <div id="myCarousel" class="carousel slide">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner">
            <div class="active item"><img  src="../bootstrap/img/CARRUSEL 1.jpg" alt="banner1" /></div>
            <div class="item"><img  src="../bootstrap/img/CARRUSEL 2.jpg" alt="banner2" /></div>
            <div class="item"><img  src="../bootstrap/img/CARRUSEL 3.jpg" alt="banner3" /></div>
        </div>
        <!-- Carousel nav -->
        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div>
</div>

<?php 
    }
?>

<?php

    include('../layouts/footer.php');

?>