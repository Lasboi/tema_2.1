<!-- Inkludere bootstrap og styles styling -->
<style>

    <?php include "css/bootstrap.css";?>
    <?php include "css/styles.css";?>

</style>

<?php

echo '
<!-- Cookie Banner -->
<div class="nk-cookie-banner alert alert-dark text-center mb-0" role="alert">
    &#x1F36A; This website uses cookies to ensure you get the best experience on our website.
    <a href="/privacy/" target="blank">Learn more</a>
    <button type="button" class="btn btn-primary btn-sm ml-3" onclick="window.nk_hideCookieBanner()">
        I Got It
    </button>
</div>
'
?>
