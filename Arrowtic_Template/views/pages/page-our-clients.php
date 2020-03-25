<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Our Clients";
$fileTitle = "Clients";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="wrapper pt-90 pb-50">
    <div class="container">
        <?php include getTemplatePath() . "/sections/pages/our-clients-1.php"; ?>
        <div class="row mb-50">
        	<?php include getTemplatePath() . "/sections/pages/pages-brand.php"; ?>
    	</div>
    	<div class="row mb-50">
        	<?php include getTemplatePath() . "/sections/pages/pages-brand.php"; ?>
    	</div>
    	<div class="row mb-50" style="flex-direction: row-reverse;">
        	<?php include getTemplatePath() . "/sections/pages/pages-brand.php"; ?>
    	</div>
    </div>
</div>
<!-- footer -->
<footer class="footer-bg footer-logo">
    <?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
</footer>