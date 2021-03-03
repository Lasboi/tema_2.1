<!-- Denne del af koden er lavet af Isabella & Lasse -->

<!-- Dine favoritter sektion -->
<?php

echo '
<div class="mainContent-content-wrap">
<div class="cities-content-wrapper">
<h1>Dine favoritter</h1>
<hr class="card-heading-line"><br>

<!-- Kanp til at tilføje en by -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addTown">+ Tilføj by</button>
<hr class="card-heading-line">
<div class="flex-container">
  <div><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg></button></div>
  <div><div class="d-flex p-2 bd-highlight"><p>Slagelse</p></div></div>
  <div><img src="images/sun1.png" class="city-image" alt="Sol"></div>  
  <p class="city-text-content"> 9°/6°</p>
  <p class="city-text-content">0 mm</p>
  <p class="city-text-content">4 m/s</p>  
  <p class="city-text-content">UV max 1,2</p>
  </div>
<hr class="card-heading-line">

<div class="flex-container">
  <div><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg></button></div>
  <div><div class="d-flex p-2 bd-highlight"><p>Vemmelev</p></div></div>
  <div><img src="images/cloud1.png" class="city-image2" alt="sky"></div>  
  <p class="city-text-content">9°/6°</p>
  <p class="city-text-content">1 mm</p>
  <p class="city-text-content">5 m/s</p>  
  <p class="city-text-content">UV max 1,4</p>
  </div>
<hr class="card-heading-line">
<div class="flex-container">
  <div><button type="button" class="btn btn-outline-danger">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"></path></svg></button></div>
  <div><div class="d-flex p-2 bd-highlight"><p>Korsør</p></div></div>
  <div><img src="images/sun1.png" class="city-image" alt="sol"></div>  
  <p class="city-text-content">9°/6°</p>
  <p class="city-text-content">0 mm</p>
  <p class="city-text-content">3 m/s</p>  
  <p class="city-text-content">UV max 1,4</p>
</div>
<br><br>
</div>
</div>
';

echo '
<!-- Modal popup når man trykker på tilføj by knap -->
<div class="mainContent-content-wrap">
<div class="modal fade" id="addTown" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tilføj din by</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
             <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Søg efter en by..." aria-label="Search">
            <button class="btn btn-dark text-white" type="submit">Søg</button>
          </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
        <button type="button" class="btn btn-primary">Tilføj by</button>
      </div>
    </div>
  </div>
</div>
</div>
'
?>
