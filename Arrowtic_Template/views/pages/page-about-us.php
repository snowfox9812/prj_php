<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "About Us";
$fileTitle = "About Us";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="wrapper pt-90 pb-70">
    <div class="container">
        <?php include getTemplatePath() . "/sections/pages/about-us-1.php"; ?>
    </div>
</div>
<?php include getTemplatePath() . "/sections/pages/about-us-2.php"; ?>
<div class="wrapper pt-100">
    <div class="container" >
        <?php include getTemplatePath() . "/sections/pages/about-us-3.php"; ?>
    </div>
</div>
<div class="wrapper pt-90 pb-140">
    <div class="container">
        <?php include getTemplatePath() . "/sections/pages/about-us-4.php"; ?>
    </div>
</div>
<div class="pages-silver-background">
    <?php include getTemplatePath() . "/sections/pages/about-us-5.php"; ?>
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
