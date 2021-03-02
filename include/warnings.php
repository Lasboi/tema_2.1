<!-- Inkludere bootstrap og styles styling -->
<style>

    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>

</style>

<?php echo '

<div class="mainContent-content-wrap">
<br>

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="index.php">Forside</a></li>
    <li class="breadcrumb-item active" aria-current="page">Varsler</li>
  </ol>
</nav>


<div class="varsel-overskrift">
        <p class="fs-2">Aktuelle varsler</p>
                <hr class="card-heading-line"><br>
        <p class="fs-5">Ingen aktuelle varsler</p>
</div><br><br>

<div class="varsel-overskrift2">
        <p class="fs-2">Varsler de næste 2-5 dage</p>
        <p class="fs-5">DMI forventer ikke voldsomt vejr.</p>
</div><br>

<div class="varsel-info">
  <div class="row row-cols-4">
    <div class="col"><img src="images/!.jpg" class="advarsel1" alt="advarsel1" width="80" height="80">
        <p class="fs-4 text-center" >Risikomelding</p><br>
        <p class="fs-6 text-center">Vær opmærksom på, hvordan vejret udvikler sig i dit område. En risikomelding er ikke et varsel, 
                        men en melding om vanskeligt vejr, som kan udvikle sig til et varsel.</p></div>
    <div class="col"><img src="images/1-trekant.jpg" class="advarsel2" alt="advarsel2" width="80" height="80">
        <p class="fs-4 text-center">Voldsomt vejr</p><br>
        <p class="fs-6 text-center">Vær opmærksom på, at vejrudviklingen kan påvirke dine omgivelser og udendørsaktiviteter.</p></div>
    <div class="col"><img src="images/2-trekant.jpg" class="advarsel3" alt="advarsel3" width="80" height="80">
        <p class="fs-4 text-center">Farligt vejr</p><br>
        <p class="fs-6 text-center">Vær forberedt på, at vejrudviklingen kan påvirke dine omgivelser og forstyrre trafik og forsyning. 
        Følg myndighedernes råd, og vær ekstra opmærksom, når du færdes ude. Følg vejrudviklingen på dmi.dk.</p></div>
    <div class="col"><img src="images/3-trekant.jpg" class="advarsel4" alt="advarsel4" width="80" height="80">
        <p class="fs-4 text-center">Meget farligt vejr</p><br>
         <p class="fs-6 text-center">Følg myndighedernes råd. Vær forberedt på, at der er høj risiko for, at vejrudviklingen kan påvirke dig og dine 
        omgivelser og forstyrre samfundets funktioner. Følg vejrudviklingen på dmi.dk.</p></div>
  </div>
</div>
</div>
<br><br>';

echo '

<div class="mainContent-content-wrap">
<div class="varsel-info2">
  <div class="row row-cols-2">
    <div class="col"><img src="images/!.jpg" class="advarsel1" alt="advarsel1" width="80" height="80">
        <p class="fs-4 text-center" >Risikomelding</p><br>
        <p class="fs-6 text-center">Vær opmærksom på, hvordan vejret udvikler sig i dit område. En risikomelding er ikke et varsel, 
                        men en melding om vanskeligt vejr, som kan udvikle sig til et varsel.</p><br></div>
    <div class="col"><img src="images/1-trekant.jpg" class="advarsel2" alt="advarsel2" width="80" height="80">
        <p class="fs-4 text-center">Voldsomt vejr</p><br>
        <p class="fs-6 text-center">Vær opmærksom på, at vejrudviklingen kan påvirke dine omgivelser og udendørsaktiviteter.</p></div>
    <div class="col"><img src="images/2-trekant.jpg" class="advarsel3" alt="advarsel3" width="80" height="80">
        <p class="fs-4 text-center">Farligt vejr</p><br>
        <p class="fs-6 text-center">Vær forberedt på, at vejrudviklingen kan påvirke dine omgivelser og forstyrre trafik og forsyning. 
        Følg myndighedernes råd, og vær ekstra opmærksom, når du færdes ude. Følg vejrudviklingen på dmi.dk.</p></div>
    <div class="col"><img src="images/3-trekant.jpg" class="advarsel4" alt="advarsel4" width="80" height="80">
        <p class="fs-4 text-center">Meget farligt vejr</p><br>
         <p class="fs-6 text-center">Følg myndighedernes råd. Vær forberedt på, at der er høj risiko for, at vejrudviklingen kan påvirke dig og dine 
        omgivelser og forstyrre samfundets funktioner. Følg vejrudviklingen på dmi.dk.</p></div>
  </div>
</div>
</div>
<br><br>'

?>