<!-- Inkludere bootstrap og styles styling -->
<style>

<?php include "css/bootstrap.css";?>
<?php include "css/styles.css";?>

</style>

<!-- Indhold til navigationen -->
<?php

echo '
<div class="navbar-top">
    <a href="index.php">
    <img class="navbar-logo" src="images/dmi_logo.png" alt="DMI Logo"></a>
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
              <a class="nav-link text-white" href="#">Radar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Målinger</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Vejrarkiv</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Varsler</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Mere
              </a>
              <ul class=" dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="#">Vejret</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Hav</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Klima</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Vejrdata og services</a></li>
              </ul>
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
