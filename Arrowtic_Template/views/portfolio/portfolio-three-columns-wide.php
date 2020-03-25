<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Portfolio 3 Columns Wide";
$fileTitle = "Portfolio";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="inner-bg-wrapper port-three-columns port-three-columns-wide">
	<?php include( getTemplatePath() . "/sections/portfolio/three-columns-wide.php") ?>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
