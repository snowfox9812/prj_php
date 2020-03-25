<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Meet The Team";
$fileTitle = "Team";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="pages-our-team-background ">
	<div class="pt-100 pb-70 pages-our-team-2">
		<?php include getTemplatePath() . "/sections/pages/our-team-2.php"; ?>
		<div class="wrapper">
			<div class="container">
				<?php include getTemplatePath() . "/sections/pages/our-team-1.php" ?>
			</div>
		</div>
		<div class="wrapper pb">
			<div class="container">
				<?php include getTemplatePath() . "/sections/pages/our-team-3.php" ?>
			</div>
		</div>
	</div>
	<div>
		<div class="wrapper pb-100">
			<div class="container">
				<?php include getTemplatePath() . "/sections/pages/our-team-4.php"; ?>
			</div>
		</div>
	</div>
</div>
<footer class="footer-bg footer-logo">
    <?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
</footer>
