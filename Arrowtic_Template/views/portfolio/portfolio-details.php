<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Single Portfolio";
$fileTitle = "Portfolio";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="inner-bg-wrapper port-three-columns port-details" style="background-image: url(<?php echo getTemplateUrl() . '/assets/images/bg/team_inner_bg.png'?>);">
	<?php include( getTemplatePath() . "/sections/portfolio/details.php") ?>
</div>
<?php include( getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
