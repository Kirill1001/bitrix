<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
			<footer class="footer">
				<div class="container">
					<div class="row justify-content-between border-bottom">
						<div class="col-12 col-lg-3 margin-phone">
							<div class="site-info">
								<a href="#" class="title">
									explore
								</a>
								<p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book survived not</p>
							</div>
						</div>

						<div class="col-4 col-lg-1 margin-phone">
							<ul class="site-link">
								<li class="title">help</li>
								<li>
									<a href="#">Newsletter</a>
								</li>
								<li>
									<a href="#">Blog</a>
								</li>
								<li>
									<a href="#">Get paid</a>
								</li>
								<li>
									<a href="#">Sign in</a>
								</li>
								<li>
									<a href="#">Sign up</a>
								</li>
							</ul>
						</div>

						<div class="col-4 col-lg-1 margin-phone">
							<ul class="site-link">
								<li class="title">follow</li>
								<li>
									<a href="#">Twitter</a>
								</li>
								<li>
									<a href="#">Facebook</a>
								</li>
								<li>
									<a href="#">Instagrap</a>
								</li>
								<li>
									<a href="#">Pinterest</a>
								</li>
								<li>
									<a href="#">Behance</a>
								</li>
							</ul>
						</div>

						<div class="col-4 col-lg-1 margin-phone">
							<ul class="site-link">
								<li class="title">explore</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li>
									<a href="#">Privacy</a>
								</li>
								<li>
									<a href="#">Features</a>
								</li>
								<li>
									<a href="#">Privacy</a>
								</li>
								<li>
									<a href="#">Privacy</a>
								</li>
							</ul>
						</div>

						<div class="col-9 col-lg-3">
							<div class="sign-up">
								<div class="title">sign up</div>
								<form action="">
									<input type="email" placeholder="duecreation@gmail.com">
									<input type="password" placeholder="password">
									<input type="submit" value="Go!">
								</form>
							</div>
						</div>

					</div>
					<div class="copyright">
						<ul class="social">
							<li>
								<a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
							</li>
						</ul>
						<p>&#64;Copyright 2015 explore All right reserved</p>
					</div>
				</div>
			</footer>

		<!-- / ========= scripts ========= \ -->
        <?
            use Bitrix\Main\Page\Asset;

            Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js");
            Asset::getInstance()->addJs("https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js");
            Asset::getInstance()->addJs(SITE_TEMPLATE_PATH."/js/script.js");
        ?>
	</body>
	</html>