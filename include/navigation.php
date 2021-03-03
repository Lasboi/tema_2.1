<!-- Denne del af koden er lavet af Lasse -->


<!-- Indhold til navigationen -->
<?php

echo '
<div class="navbar-top">
    <a href="index.php">
    <img class="navbar-logo" src="images/logo1_edited.png" alt="DMI Logo"></a>
</div>

<div class="navbar-wrapper">
<nav class="navbar navbar-expand-lg navbar-light bg-primary">
        <div class="container-fluid">
        <button class="navbar-toggler bg-white btn-outline-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link text-white" href="vejr.php">Vejret</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php#news">Nyheder</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php#weatherMap">Vejrkort</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="varsler.php">Varsler</a>
            </li>
          </ul>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Søg..." aria-label="Search">
            <button class="btn btn-dark text-white" type="submit">Søg</button>
          </form>
        </div>
      </div>
    </nav>
    </div>'
?>
