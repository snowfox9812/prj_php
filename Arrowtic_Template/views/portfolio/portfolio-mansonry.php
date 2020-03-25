<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Portfolio Mansonry";
$fileTitle = "Portfolio";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="inner-bg-wrapper port-three-columns">
	<?php include( getTemplatePath() . "/sections/portfolio/mansonry.php") ?>
</div>
<?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
