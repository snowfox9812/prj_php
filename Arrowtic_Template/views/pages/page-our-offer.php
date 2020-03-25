<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "What We Offer";
$fileTitle = "What We Offer";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="pages-border-b">
    <div class="wrapper pt-100 pb-100">
        <?php include getTemplatePath() . "/sections/pages/our-offer-1.php"; ?>
    </div>
</div>
<div>
    <div class="wrapper">
        <div class="container">
            <?php include getTemplatePath() . "/sections/pages/our-offer-2.php"; ?>
        </div>
    </div>
</div>
<div class="grey-bg pt-90 pb-50">
    <div class="wrapper">
        <div class="container">
            <?php include getTemplatePath() . "/sections/pages/our-offer-3.php"; ?>
        </div>
    </div>
</div>
<div class="pt-90 pb-100">
    <div class="wrapper">
        <div class="container">
            <?php include getTemplatePath() . "/sections/pages/about-us-6.php"; ?>
        </div>
    </div>
</div>
<footer class="footer-bg footer-logo">
    <?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
</footer>
