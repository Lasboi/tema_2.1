<!-- Denne del af koden er lavet af Lasse -->

<!-- Forside vejr kort sektion -->

<?php

// Overskrift
echo '
<div class="card-heading-wrapper">
    <h1>Slagelse</h1>
    <hr class="card-heading-line">
</div>
';

// Mobil modul
echo '

<div class="carousel-content-wrapper">

    <!-- Carousel modul -->
    <div id="carouselExampleControlsMobile" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-wrapper">
                    
                    <!-- Vejr kort -->
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Mandag</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">7°</h1>
                        <h5 class="card-title">H:9° L:6°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Tirsdag</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">5°</h1>
                        <h5 class="card-title">H:7° L:3°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                </div>
            </div>
            
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Onsdag</h5>
                        <img src="images/snow1.png" class="card-img-top" alt="Snevejr"><br>
                        <h1 class="card-title">-1°</h1>
                        <h5 class="card-title">H:1° L:-2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Torsdag</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regnvejr"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:4° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                </div>
            </div>
            
                <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Fredag</h5>
                        <img src="images/thunder1.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">4°</h1>
                        <h5 class="card-title">H:7° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Lørdag</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">10°</h1>
                        <h5 class="card-title">H:12° L:6°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Søndag</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">16°</h1>
                        <h5 class="card-title">H:19° L:14°</h5>        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsMobile"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsMobile"  data-bs-slide="next">
            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br>
</div>';

//Tablet modul
echo '

<div class="carousel-content-wrapper-tablet">
    <div id="carouselExampleControlsTablet" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Mandag</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">7°</h1>
                        <h5 class="card-title">H:9° L:6°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Tirsdag</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">5°</h1>
                        <h5 class="card-title">H:7° L:3°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Onsdag</h5>
                        <img src="images/snow1.png" class="card-img-top" alt="Snevejr"><br>
                        <h1 class="card-title">-1°</h1>
                        <h5 class="card-title">H:1° L:-2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Torsdag</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regnvejr"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:4° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Fredag</h5>
                        <img src="images/thunder1.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">4°</h1>
                        <h5 class="card-title">H:7° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Lørdag</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">10°</h1>
                        <h5 class="card-title">H:12° L:6°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">Søndag</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">16°</h1>
                        <h5 class="card-title">H:19° L:14°</h5>        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div><br>
                        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsTablet"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsTablet"  data-bs-slide="next">
            <span class="carousel-control-next-icon bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br>
</div>';

//pc modul
echo '
<div class="card-Container-Pc">
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Mandag</h5>
        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
        <h1 class="card-title">7°</h1>
        <h5 class="card-title">H:9° L:6°</h5>
        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Tirsdag</h5>
        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
        <h1 class="card-title">5°</h1>
        <h5 class="card-title">H:7° L:3°</h5>
        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Onsdag</h5>
        <img src="images/snow1.png" class="card-img-top" alt="Snevejr"><br>
        <h1 class="card-title">-1°</h1>
       <h5 class="card-title">H:1° L:-2°</h5>
        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Torsdag</h5>
        <img src="images/rain1.png" class="card-img-top" alt="Regnvejr"><br>
        <h1 class="card-title">2°</h1>
        <h5 class="card-title">H:4° L:1°</h5>
        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Fredag</h5>
        <img src="images/thunder1.png" class="card-img-top" alt="Torden"><br>
        <h1 class="card-title">4°</h1>
        <h5 class="card-title">H:7° L:2°</h5>
        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Lørdag</h5>
        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
        <h1 class="card-title">10°</h1>
        <h5 class="card-title">H:12° L:6°</h5>
        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
    <div class="card" style="width: 140px;">
        <h5 class="card-title">Søndag</h5>
        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
        <h1 class="card-title">16°</h1>
        <h5 class="card-title">H:19° L:14°</h5>        <div class="card-Container-Temp">
            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
        </div><br>
        <a href="vejr.php" class="btn btn-primary"><span>Se dagens vejr</span></a>
    </div>
</div><br>
'
?>
