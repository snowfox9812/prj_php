<?php
include $_SERVER['DOCUMENT_ROOT'] . '/arrowtic_Template/partials/header.php';
$fileName = "Contact Us";
$fileTitle = "Contact Us";
include getTemplatePath() . "/partials/header/header-port.php";
?>
<div class="wrapper">
	<div class="container pt-100 pb-70">
		<div class="row align-items-center mb-100">
			<div class="contact-us-2columns-1 pr-15 pl-15">
				<h4 class="pages-h3 ">We’ll Be</h4>
				<h1 class="pages-h1">Glad To Assist You!</h1>
				<p class="pages-p2">There are many variations of passages of Lorem Ipsum available but the majority have suffered alteration in that some form by injected humour or randomised words which don't look even the slightly is believable dummy text.</p>
			</div>
			<div class="contact-us-2columns-2 pr-15 pl-15">
				<img src="<?php echo getTemplateUrl() . '/assets/images/bg/contact.png'?>">
			</div>
		</div>
		<div class="row align-items-center">
			<div class="contact-us-3columns pl-15">
				<div class="contact-box-shadow text-center pt-75 pb-75">
					<div class="contact-cta-icon mb-15 ">
						<i class="flaticon-phone" style="color: #6a55a6;"></i>
					</div>
					<div class="contact-cta-content">
						<h5>PHONE NO:</h5>
						<span>+05 - 015 - 246 -5524</span>
						<span>+06 - 025 - 286 - 5500</span>	
					</div>
				</div>
			</div>
			<div class="contact-us-3columns">
				<div class="contact-box-shadow text-center pt-75 pb-75">
					<div class="contact-cta-icon mb-15 ">
						<i class="flaticon-phone" style="color: #6a55a6;"></i>
					</div>
					<div class="contact-cta-content">
						<h5>PHONE NO:</h5>
						<span>+05 - 015 - 246 -5524</span>
						<span>+06 - 025 - 286 - 5500</span>	
					</div>
				</div>	
			</div>
			<div class="contact-us-3columns pr-15">
				<div class="contact-box-shadow text-center pt-75 pb-75">
					<div class="contact-cta-icon mb-15 ">
						<i class="flaticon-phone" style="color: #6a55a6;"></i>
					</div>
					<div class="contact-cta-content">
						<h5>PHONE NO:</h5>
						<span>+05 - 015 - 246 -5524</span>
						<span>+06 - 025 - 286 - 5500</span>	
					</div>
				</div>
			</div>
		</div>
		<div class="mt-100">
			<div class="row">
				<div class="pages-2columns contact-map">
					<img src="<?php echo getTemplateUrl() . '/assets/images/map.jpg'?>">
				</div>
				<div class="contact-input pr-15 pl-15">
					<div class="post-comment-form">
			            <div class="details-title mb-25">
			                <h3>Get In Touch With Us</h3>
			            </div>
			            <form action="#" class="comment-form">
			          	    <input type="text" placeholder="Full Name" class="contact-us-fullname">
			                <div class="grid-11">
			                    <div>
			                       <input type="text" placeholder="Your Name">
			                    </div>
			                    <div>
			                        <input type="email" placeholder="Your Email">
			                    </div>
			                </div>
			                <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Comment"></textarea>
			                <div class="portifolio-btn mt-20">
			                    <a href="#">SEND MESSAGE</a>
			                </div>
			            </form>
			        </div>
				</div>
			</div>
		</div>
	</div>
</div>
<footer class="footer-bg footer-logo">
    <?php include(getTemplatePath() . "/partials/footer/footer-home-4.php"); ?>
</footer>
