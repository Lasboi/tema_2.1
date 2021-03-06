<!-- Denne del er lavet af Lasse -->

<!-- Cookies popup script -->

    <!-- Kalder cookie banner funktionen for at vise indholdet -->
    function showCookieBanner(){
    let cookieBanner = document.getElementsByClassName("nk-cookie-banner")[0];
    cookieBanner.style.display = "block";
}

    <!-- Skjuler cookies banner og gemmer værdien for at brugeren har trykket accept -->
    function hideCookieBanner(){
    localStorage.setItem("web_dev_isCookieAccepted", "yes");

    let cookieBanner = document.getElementsByClassName("nk-cookie-banner")[0];
    cookieBanner.style.display = "none";
}

    <!-- Tjekker om brugeren har accepteret cookies før og viser indholdet alt efter hvad værdi der er sat -->
    function initializeCookieBanner(){
    let isCookieAccepted = localStorage.getItem("web_dev_isCookieAccepted");
    if(isCookieAccepted === null)
{
    localStorage.clear();
    localStorage.setItem("web_dev_isCookieAccepted", "no");
    showCookieBanner();
}
    if(isCookieAccepted === "no"){
    showCookieBanner();
}
}

    window.onload = initializeCookieBanner();
    window.nk_hideCookieBanner = hideCookieBanner;