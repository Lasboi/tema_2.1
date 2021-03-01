<!-- Inkludere bootstrap og styles styling -->
<style>

    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>

</style>

<?php

echo '
<div class="mainContent-content-wrap">
<div class="weathermap-content-wrap" id="weatherMap"> 
<h1> Vejrkort <h1>
<hr class="card-heading-line">

<button class="btn btn-primary" type="button" onclick="ShowTemp()">Vejr</button>&nbsp;&nbsp;
<button class="btn btn-primary" type="button" onclick="ShowAir()">Vind</button>&nbsp;&nbsp;
<button class="btn btn-primary" type="button" onclick="ShowWaves()">Bølger</button>
<br><br>
    <img alt="" src="images/vejrekort.JPG" id="image">
<br>
</div>
</div>

<script language="javascript">
    function ShowTemp()
    {
        document.getElementById("image").src = "images/vejrekort.JPG";
    }

    function ShowAir()
    {
        document.getElementById("image").src = "images/vejrkort_air.PNG";
    }
    
    function ShowWaves()
    {
        document.getElementById("image").src = "images/vejrkort_waves.PNG";
    }
</script>
'

?>
