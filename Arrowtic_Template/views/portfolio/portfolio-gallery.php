<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Portfolio Gallery";
$fileTitle = "Portfolio";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="inner-bg-wrapper port-gallery grid-11-768-1">
	<?php include( getTemplatePath() . "/sections/portfolio/gallery-area.php") ?>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
