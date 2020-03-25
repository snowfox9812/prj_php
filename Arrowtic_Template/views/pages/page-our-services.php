<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Our Services";
$fileTitle = "Services";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="wrapper pt-90 pb-70">
    <div class="container">
        <?php include getTemplatePath() . "/sections/pages/our-services-1.php"; ?>
    </div>
</div>
<div class="pages-silver-background pt-100 pb-70">
  <?php include getTemplatePath() . "/sections/pages/our-services-2.php"; ?>
</div>
<div class="wrapper pt-90 pb-70">
    <div class="container">
       <?php include getTemplatePath() . "/sections/pages/our-services-3.php"; ?>
    </div>
</div>
<footer class="footer-bg footer-logo">
    <?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
</footer>
