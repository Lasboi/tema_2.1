<!-- Inkludere bootstrap og styles styling -->
<style>
    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>
</style>

<?php

echo '
<div class="cities-content-wrapper">
<h1>Dine favoritter</h1>
<hr class="card-heading-line"><br>
<button type="button" class="btn btn-primary">+ Tilføj by</button>
<hr class="card-heading-line">
<div class="flex-container">
  <div><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg></button></div>
  <div><div class="d-flex p-2 bd-highlight">Slagelse</div></div>
  <div><img src="images/sun.png" class="city-image" alt="Sol"></div>  
  <div><p class="fs-6">9°/6°</p></div>
  <div>0 mm</div>
  <div>4 m/s</div>  
  <div>UV max 1,2</div>
  </div>
<hr class="card-heading-line">

<div class="flex-container">
  <div><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg></button></div>
  <div><div class="d-flex p-2 bd-highlight">Vemmelev</div></div>
  <div><img src="images/cloud.png" class="city-image2" alt="sky"></div>  
  <div><p class="fs-6">9°/6°</p></div>
  <div>1 mm</div>
  <div>5 m/s</div>  
  <div>UV max 1,4</div>
  </div>
<hr class="card-heading-line">
<div class="flex-container">
  <div><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg></button></div>
  <div><div class="d-flex p-2 bd-highlight">Korsør</div></div>
  <div><img src="images/sun.png" class="city-image" alt="sol"></div>  
  <div><p class="fs-6">9°/6°</p></div>
  <div>0 mm</div>
  <div>3 m/s</div>  
  <div>UV max 1,4</div>
</div>
<br><br>
</div>


'
?>
