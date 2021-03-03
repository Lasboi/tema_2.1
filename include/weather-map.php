<!-- Denne del er lavet af Kaya og script + knapper lavet af Lasse -->

<!-- Vejr kort sektion -->

<?php

echo '
<div class="mainContent-content-wrap">
<div class="weathermap-content-wrap" id="weatherMap"> 
<h1> Vejrkort <h1>
<hr class="card-heading-line">

<!-- Kanpper hvor man kan skifte vejr kort -->
<button class="btn btn-primary" type="button" onclick="ShowTemp()">Vejr</button>&nbsp;&nbsp;
<button class="btn btn-primary" type="button" onclick="ShowAir()">Vind</button>&nbsp;&nbsp;
<button class="btn btn-primary" type="button" onclick="ShowWaves()">Bølger</button>
<br><br>
    <img alt="" src="images/vejrekort.JPG" id="image">
<br>
</div>
</div>

<!-- Script som giver funktion til vejrkortet så det kan skifte -->
<script src="scripts/toogleMap.js"></script>
'

?>
