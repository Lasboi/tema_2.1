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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/cloud.png" class="card-img-top" alt="Skyet"><br>
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
                        <img src="images/cloud.png" class="card-img-top" alt="Skyet"><br>
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
                        <img src="images/rain.png" class="card-img-top" alt="Regn"><br>
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
                        <img src="images/rain.png" class="card-img-top" alt="Regn"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/cloud.png" class="card-img-top" alt="Skyet"><br>
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
                        <img src="images/cloud.png" class="card-img-top" alt="Skyet"><br>
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
                        <img src="images/rain.png" class="card-img-top" alt="Regn"><br>
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
                        <img src="images/rain.png" class="card-img-top" alt="Regn"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/sun.png" class="card-img-top" alt="Sol"><br>
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
                        <img src="images/cloud.png" class="card-img-top" alt="Skyet"><br>
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
                        <img src="images/cloud.png" class="card-img-top" alt="Skyet"><br>
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
                        <img src="images/rain.png" class="card-img-top" alt="Regn"><br>
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
                        <img src="images/rain.png" class="card-img-top" alt="Regn"><br>
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
    <p class="dailyWeather-Text text-black">Her kan du få overblikket over dagens vejrudsigt<br>
        Du kan få en prognose over hele dagen ved at benytte pilene i siden til at spole tiden frem og tilbage.</p>
</div><br>
'

?>