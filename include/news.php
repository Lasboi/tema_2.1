
<!-- Inkludere bootstrap og styles styling -->
<style>

    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>

</style>

<?php
echo '

<div class="news-wrapper">
    <h1>Seneste nyheder</h1>
    <hr class="card-heading-line"><br>
    <div id="carouselExampleCaptionsNews" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide-to="2" aria-label="Slide 3"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide-to="2" aria-label="Slide 4"></button>
        <button type="button" data-bs-target="#carouselExampleCaptionsNews" data-bs-slide-to="2" aria-label="Slide 5"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="images/ice.jpg" class="mx-auto d-block w-50 h-50" alt="..."> 
          <div class="carousel-caption d-none d-md-block">
            <h5 class="news-text text-black bg-white">Februar og vinteren 20/21 indtil nu</h5>
            <p class="news-text text-black bg-white">16 Februar 2021</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/ocean.jpg" class="mx-auto d-block w-50 h-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="news-text text-black bg-white">Hvorfor er det så koldt?</h5>
            <p class="news-text text-black bg-white">12 Februar 2021</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="images/winter.jpg" class="mx-auto d-block w-50 h-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="news-text text-black bg-white">Vi har haft den koldeste nat i 9 år</h5>
            <p class="news-text text-black bg-white">12 Februar 2021</p>
          </div>
         </div>
           <div class="carousel-item">
          <img src="images/spring.jpg" class="mx-auto d-block w-50 h-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="news-text text-black bg-white">Vejret bliver varmere, forår er på vej</h5>
            <p class="news-text text-black bg-white">25 Februar 2021</p>
        </div>
      </div>
      <div class="carousel-item">
          <img src="images/summer.jpg" class="mx-auto d-block w-50 h-50" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5 class="news-text text-black bg-white">Glæd dig til sommer! 
            <br>
            Så varmt bliver det.</h5>
            <p class="news-text text-black bg-white">19 April 2021</p>
        </div>
       </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionsNews"  data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionsNews"  data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
</div>
</div><br>
'
?>
