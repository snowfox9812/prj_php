<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Blog Right Sidebar";
$fileTitle = "Blog";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="blog-inner-page">
	<?php include( getTemplatePath() . "/sections/blog/blog-right-s.php") ?>
</div>
<?php include( getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
