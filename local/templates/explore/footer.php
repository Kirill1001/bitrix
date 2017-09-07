<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php
$curPage = $APPLICATION->GetCurPage(true);
if ($curPage != SITE_DIR."index.php"): ?>

</div>

<?php endif; ?>

            </div>

			<footer class="footer">
				<div class="container">
					<div class="row justify-content-between border-bottom">
						<div class="col-12 col-lg-3 margin-phone">
							<div class="site-info">
								<a href="#" class="title">
									explore
								</a>
                                    <?$APPLICATION->IncludeComponent(
                                        "bitrix:main.include",
                                        "",
                                        Array(
                                            "AREA_FILE_SHOW" => "file",
                                            "AREA_FILE_SUFFIX" => "",
                                            "EDIT_TEMPLATE" => "",
                                            "PATH" => "/include/footer_descr.php"
                                        )
                                    );?>
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
                        <div>
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:main.include",
                                "",
                                Array(
                                    "AREA_FILE_SHOW" => "file",
                                    "AREA_FILE_SUFFIX" => "",
                                    "EDIT_TEMPLATE" => "",
                                    "PATH" => "/include/footer_social.php"
                                )
                            );?>
                        </div>
						<p>&#64;Copyright 2015 explore All right reserved</p>
					</div>
				</div>
			</footer>
<?
    if ($bScriptInFooter) {
        $APPLICATION->ShowHeadStrings();
        $APPLICATION->ShowHeadScripts();
    }
?>
	</body>
	</html>