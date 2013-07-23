<?php

    include('../layouts/header.php');

?>

<div id="myCarousel" class="carousel slide">
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
        <li data-target="#myCarousel" data-slide-to="4"></li>
        <li data-target="#myCarousel" data-slide-to="5"></li>
        <li data-target="#myCarousel" data-slide-to="6"></li>
        <li data-target="#myCarousel" data-slide-to="7"></li>
        <li data-target="#myCarousel" data-slide-to="8"></li>
        <li data-target="#myCarousel" data-slide-to="9"></li>
        <li data-target="#myCarousel" data-slide-to="10"></li>
    </ol>
    <!-- Carousel items -->
    <div class="carousel-inner">
        <div class="active item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 1.jpg" alt="banner1" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 2.jpg" alt="banner2" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 3.jpg" alt="banner3" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 4.jpg" alt="banner4" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 5.jpg" alt="banner5" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 6.jpg" alt="banner6" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 7.jpg" alt="banner7" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 8.jpg" alt="banner8" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 9.png" alt="banner9" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 10.png" alt="banner10" /></div>
        <div class="item"><img  src="<?echo BASE_URL;?>views/bootstrap/img/CARRUSEL 11.png" alt="banner11" /></div>
    </div>
    <!-- Carousel nav -->
    <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
    <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>

<?php

    include('../layouts/footer.php');

?>
