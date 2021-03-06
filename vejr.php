<!-- Denne del af koden er lavet af Lasse -->


<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>DMI - Vejr</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Lasse, Isabella, Kaya & Jessika">
    <meta name="copyright" content="Copyright Lasse">

    <!-- Favicon -->
    <link rel="icon" type="image/png" href="images/favicon_edited.jpg"/>

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>

<!-- Navigations indhold -->
<?php include "include/navigation.php";?>

<!-- Dagens prognose indhold -->
<?php include "include/daily-weather-cards.php";?>

<!-- News indhold -->
<?php include "include/news.php";?>

<!-- App indhold -->
<?php include "include/app-download.php";?>

<!-- Footer indhold -->
<?php include "include/footer.php";?>

<!-- Cookies indhold -->
<?php include "include/cookies.php";?>


<!-- Cookies Javascript -->
<script src="scripts/cookies.js"></script>

<!-- Bootstrap Javascript -->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
