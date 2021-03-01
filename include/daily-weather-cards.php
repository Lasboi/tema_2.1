<!-- Inkludere bootstrap og styles styling -->
<style>

    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>

</style>

<?php

// Overskrift
echo '
<br>
<div class="card-heading-wrapper">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page">Vejret</li>
  </ol>
</nav>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Forside</a></li>
    <li class="breadcrumb-item active" aria-current="page">Vejret</li>
  </ol>
</nav>
    <h1>Dagens prognose</h1>
    <hr class="card-heading-line"><br>
</div>
';

// Mobil modul
echo '

<div class="carousel-content-wrapper">
    <div id="carouselExampleControlsMobile" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-wrapper">
                   <div class="card" style="width: 140px;">
                        <h5 class="card-title">8:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:4° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">10 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">10:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">5°</h1>
                        <h5 class="card-title">H:7° L:4°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">11 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">12:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">9°</h1>
                        <h5 class="card-title">H:12° L:8°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">7 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                        <div class="card" style="width: 140px;">
                        <h5 class="card-title">14:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">12°</h1>
                        <h5 class="card-title">H:15° L:10°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">2 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                </div>
            </div>
                <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">16:00</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">8°</h1>
                        <h5 class="card-title">H:10° L:5°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">4 m/s</h5>
                        <img src="images/wind_up_right.png" class="card-img-wind" alt="Vind fra højre op">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">18:00</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:4° L:0°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">5 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">20:00</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regn"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">6 m/s</h5>
                        <img src="images/wind_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">22:00</h5>
                        <img src="images/thunder.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:3° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">7 m/s</h5>
                        <img src="images/wind_down_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                <div class="card" style="width: 140px;">
                        <h5 class="card-title">00:00</h5>
                        <img src="images/thunder.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">4 m/s</h5>
                        <img src="images/wind_up_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">02:00</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regn"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">2 m/s</h5>
                        <img src="images/wind_up.png" class="card-img-wind" alt="Vind fra højre op">
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
    </div><br><br><br>
</div>';

//Tablet modul
echo '

<div class="carousel-content-wrapper-tablet">
    <div id="carouselExampleControlsTablet" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">8:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:4° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">10 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">10:00</h5>
                        <img src="../images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">5°</h1>
                        <h5 class="card-title">H:7° L:4°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">11 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">12:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">9°</h1>
                        <h5 class="card-title">H:12° L:8°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">7 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                        <div class="card" style="width: 140px;">
                        <h5 class="card-title">14:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">12°</h1>
                        <h5 class="card-title">H:15° L:10°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">2 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">16:00</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">8°</h1>
                        <h5 class="card-title">H:10° L:5°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">4 m/s</h5>
                        <img src="images/wind_up_right.png" class="card-img-wind" alt="Vind fra højre op">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">18:00</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:4° L:0°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">5 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">20:00</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regn"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">6 m/s</h5>
                        <img src="images/wind_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">22:00</h5>
                        <img src="images/thunder.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:3° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">7 m/s</h5>
                        <img src="images/wind_down_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
            <div class="carousel-wrapper">
                <div class="card" style="width: 140px;">
                        <h5 class="card-title">00:00</h5>
                        <img src="images/thunder.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">4 m/s</h5>
                        <img src="images/wind_up_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">02:00</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regn"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">2 m/s</h5>
                        <img src="images/wind_up.png" class="card-img-wind" alt="Vind fra højre op">
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
    </div><br><br><br>
</div>';

//pc modul
echo '
<div class="carousel-fixed-width">
<div class="carousel-content-wrapper-pc">
    <div id="carouselExampleControlsPc" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">8:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:4° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">10 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">10:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">5°</h1>
                        <h5 class="card-title">H:7° L:4°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">11 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">12:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">9°</h1>
                        <h5 class="card-title">H:12° L:8°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">7 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">14:00</h5>
                        <img src="images/sun1.png" class="card-img-top" alt="Sol"><br>
                        <h1 class="card-title">12°</h1>
                        <h5 class="card-title">H:15° L:10°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">2 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">16:00</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">8°</h1>
                        <h5 class="card-title">H:10° L:5°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">4 m/s</h5>
                        <img src="images/wind_up_right.png" class="card-img-wind" alt="Vind fra højre op">
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="carousel-wrapper">
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">18:00</h5>
                        <img src="images/cloud1.png" class="card-img-top" alt="Skyet"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:4° L:0°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">5 m/s</h5>
                        <img src="images/wind_right.png" class="card-img-wind" alt="Vind fra højre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">20:00</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regn"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">6 m/s</h5>
                        <img src="images/wind_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">22:00</h5>
                        <img src="images/thunder.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">2°</h1>
                        <h5 class="card-title">H:3° L:1°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">7 m/s</h5>
                        <img src="images/wind_down_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">00:00</h5>
                        <img src="images/thunder.png" class="card-img-top" alt="Torden"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">4 m/s</h5>
                        <img src="images/wind_up_left.png" class="card-img-wind" alt="Vind fra venstre">
                    </div>
                    <div class="card" style="width: 140px;">
                        <h5 class="card-title">02:00</h5>
                        <img src="images/rain1.png" class="card-img-top" alt="Regn"><br>
                        <h1 class="card-title">3°</h1>
                        <h5 class="card-title">H:5° L:2°</h5>
                        <div class="card-Container-Temp">
                            <img src="images/red_arrow_up.png" class="card-img-bottom" alt="Højeste"><img src="images/blue_arrow_down.png" class="card-img-bottom" alt="Laveste">
                        </div>
                        <br>
                        <h5 class="card-title">2 m/s</h5>
                        <img src="images/wind_up.png" class="card-img-wind" alt="Vind fra højre op">
                    </div>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsPc"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon bg-primary bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsPc"  data-bs-slide="next">
            <span class="carousel-control-next-icon bg-primary bg-primary" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div><br>
</div>
</div>
';

echo '
<div class="card-heading-wrapper">
    <p class="dailyWeather-Text">Her kan du få overblikket over dagens vejrudsigt.<br>
        Du kan få en prognose over hele dagen ved at benytte pilene i siden til at spole tiden frem og tilbage.<br><br>
        Ved at følge vores prognose kan du sikre dig at du altid er klædt på til dagens vejr!</p>
</div><br>
';

echo '

<div class="card-heading-wrapper">
    <h1>2 Døgns prognose</h1>
    <hr class="card-heading-line">
</div>

<div class="card-heading-wrapper">
    <p class="dailyWeather-Text">Disse prognoser er usikre for hvordan vejret rent faktisk bliver<br> Læs mere om usikkerheden bag graferne ved at
         
         <!-- Modal link -->
<a href="#dailyWeather" data-bs-toggle="modal" data-bs-target="#dailyWeather">
  trykke her.
</a>

<!-- Modal -->
<div class="modal fade" id="dailyWeather" tabindex="-1" aria-labelledby="dailyWeather" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Usikkerhed i prognose</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="dailyWeather-Text">For <strong>nedbør </strong>vises usikkerheden som lyseblå søjler&nbsp;med den mest sandsynlige værdi markeret som et mørkeblåt bånd. Du kan få de præcise værdier&nbsp;for hver time ved at føre&nbsp;musen over eller berøre touch-skærmen.</p><br>
        <p class="dailyWeather-Text">For <strong>temperatur </strong>og <strong>vind </strong>vises usikkerheden som grafer, der viser intervallet for de sandsynlige værdier. Midt i grafen viser en kurve&nbsp;den&nbsp;mest sandsynlige temperatur eller vind.&nbsp;Du kan få de præcise værdier&nbsp;for hver time ved at føre&nbsp;musen over eller berøre touch-skærmen.</p><br>
        <h2>Usikkerheden er et værktøj</h2><br>
        <p class="dailyWeather-Text">Vejrprognoser bliver aldrig helt sikre. Derfor er usikkerhed et redskab til at bedømme både den mest sandsynlige og den mest ekstreme udvikling af vejret.</p><br>
        <p class="dailyWeather-Text">Usikkerheden udregnes ved at køre vejrmodellerne mange gange med lidt forskellige udgangspunkter, der tager hensyn til usikkerheder forbundet med målingerne af det aktuelle vejr.</p><br>
        <p class="dailyWeather-Text">Pakken af vejrmodelkørsler - kaldet et ensemble - giver et billede af, hvilke udviklinger, der er sandsynlige, og hvilke som er mindre sandsynlige. Hvis kørslerne viser en stor variation, er det normalt et udtryk for at vejrsituationen er vanskelig at forudsige.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Forstået!</button>
      </div>
    </div>
  </div>
</div>
</div>

<div class="image-content-center">
    <img src="images/2-day-weather.PNG" class="dailyWeather-Image" alt="2 døgns prognose">
</div><br>

<div class="card-heading-wrapper">
    <h1>3-9 Døgns prognose</h1>
    <hr class="card-heading-line">
</div>

<div class="image-content-center">
    <img src="images/3-9-day-weather.PNG" class="dailyWeather-Image" alt="2 døgns prognose">
</div><br>
'

?>