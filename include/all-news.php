<!-- Inkludere bootstrap og styles styling -->
<style>

    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>

</style>

<?php

echo '
<br>
<div class="mainContent-content-wrap">

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Forside</a></li>
    <li class="breadcrumb-item active" aria-current="page">Nyheder</li>
  </ol>
</nav> 
    <h1> Alle nyheder <h1>
    <hr class="card-heading-line">
    <br>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-70">
          <img src="images/ice.jpg" class="allNews-img-top" alt="Iskoldt">
          <div class="card-body">
            <h4 class="card-title text-center">Februar og vinteren 20/21</h4>
            <hr class="card-heading-line">
            <p class="news-Card-Text">Marts nærmer sig med hastige skridt, og kalendervinteren er ved at være slut...</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-allNews btn-primary" href="nyhed-1.php" role="button"><span >Læs mere her</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="images/ocean.jpg" class="allNews-img-top" alt="Koldt">
          <div class="card-body">
            <h4 class="card-title text-center">Hvorfor er det så koldt?</h4>
            <hr class="card-heading-line">
            <p class="news-Card-Text">Iskolde polare vinde har fået et solidt tag i Danmark, og vinteren er for alvor...</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-allNews btn-primary" href="nyhed-1.php" role="button"><span >Læs mere her</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="images/winter.jpg" class="allNews-img-top" alt="Vinter">
          <div class="card-body">
            <h4 class="card-title text-center">Den koldeste nat i 9 år</h4>
            <hr class="card-heading-line">
            <p class="news-Card-Text">Kold polarluft har fundet vej til landet, og natten til fredag blev den koldeste...</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-allNews btn-primary" href="nyhed-1.php" role="button"><span >Læs mere her</span></a>
          </div>
        </div>
      </div>
    </div>
    <br><br>
    
      <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-70">
          <img src="images/pollen.png" class="allNews-img-top" alt="Forår">
          <div class="card-body">
            <h4 class="card-title text-center">Pollen på rekordkurs</h4>
            <hr class="card-heading-line">
            <p class="news-Card-Text">Milde ’forårsvinde’ fra syd har sendt pollentallene på himmelfart, og mængden af elle-pollen...</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-allNews btn-primary" href="nyhed-1.php" role="button"><span >Læs mere her</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="images/lake.png" class="allNews-img-top" alt="Iskold sø">
          <div class="card-body">
            <h4 class="card-title text-center">Isens bæreevne</h4>
            <hr class="card-heading-line">
            <p class="news-Card-Text">Hvor koldt er det, hvor længe har det været koldt, og hvor meget blæser det? Vejret er...</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-allNews btn-primary" href="nyhed-1.php" role="button"><span >Læs mere her</span></a>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-70">
          <img src="images/sign.png" class="allNews-img-top" alt="Skilt">
          <div class="card-body">
            <h4 class="card-title text-center">Glatte veje</h4>
            <hr class="card-heading-line">
            <p class="news-Card-Text">Den danske vinter svinger ofte omkring frysepunktet, hvilket gør, at vi ofte døjer med...</p>
          </div>
          <div class="card-footer">
            <a class="btn btn-allNews btn-primary" href="nyhed-1.php" role="button"><span >Læs mere her</span></a>
          </div>
        </div>
      </div>
    </div>
    </div>
    <br><br>
'

?>