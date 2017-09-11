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
                                    <?php $APPLICATION->IncludeComponent(
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
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "bottom.menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom.help",
                                    "USE_EXT" => "N"
                                )
                            );?>
						</div>

						<div class="col-4 col-lg-1 margin-phone">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "bottom.menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom.follow",
                                    "USE_EXT" => "N"
                                )
                            );?>
						</div>

						<div class="col-4 col-lg-1 margin-phone">
                            <?$APPLICATION->IncludeComponent(
                                "bitrix:menu",
                                "bottom.menu",
                                Array(
                                    "ALLOW_MULTI_SELECT" => "N",
                                    "CHILD_MENU_TYPE" => "left",
                                    "DELAY" => "N",
                                    "MAX_LEVEL" => "1",
                                    "MENU_CACHE_GET_VARS" => array(""),
                                    "MENU_CACHE_TIME" => "3600",
                                    "MENU_CACHE_TYPE" => "N",
                                    "MENU_CACHE_USE_GROUPS" => "Y",
                                    "ROOT_MENU_TYPE" => "bottom.explore",
                                    "USE_EXT" => "N"
                                )
                            );?>
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