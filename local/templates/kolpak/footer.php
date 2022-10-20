<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die(); ?>
    <?if ($APPLICATION->GetCurPage(false) != '/' && $APPLICATION->GetDirProperty('SIDEBAR') != 'N'):?>
                </div>
                <div class="main__sidebar">

                    <?$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"menu-inner", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "N",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "left",
		"USE_EXT" => "Y",
		"COMPONENT_TEMPLATE" => "menu-inner"
	),
	false
);?>

                </div>
            </div>


        </div>
    <?endif;?>
    </main>

</div>

<footer class="footer">
    <div class="container">
        <div class="footer__body">

            <div class="footer__contacts">
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "phone",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/phone.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "phone",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/phone2.php"
                    )
                );?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "email",
                    Array(
                        "AREA_FILE_SHOW" => "file",
                        "PATH" => "/include/email.php"
                    )
                );?>
            </div>

            <?$APPLICATION->IncludeComponent(
                "bitrix:menu",
                "menu-bottom",
                Array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "top",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "1",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "3600",
                    "MENU_CACHE_TYPE" => "N",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top",
                    "USE_EXT" => "N"
                )
            );?>

            <div class="copyright">
                © <?=date('Y')?> <?= $_SERVER['HTTP_HOST'] ?>
            </div>

        </div>
    </div>
</footer>

</body>
</html>