<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Контакты");
?>

    <div class="contacts">
        <div class="contacts__info">

            <div class="contacts__description">
                Мы рады встретить Вас в нашем офисе. <br>
                Вы так же можете связаться с нами следующими способами:
            </div>

            <div class="contacts__list">

                <div class="contacts__item">
                    <div class="contacts__email">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "email",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/email.php"
                            )
                        );?>
                    </div>
                </div>

                <div class="contacts__item">
                    <div class="contacts__phone">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "phone",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/phone.php"
                            )
                        );?>
                    </div>
                </div>

                <div class="contacts__item">
                    <div class="contacts__phone">
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:main.include",
                            "phone",
                            Array(
                                "AREA_FILE_SHOW" => "file",
                                "PATH" => "/include/phone2.php"
                            )
                        );?>
                    </div>
                </div>

            </div>
        </div>

        <div class="contacts__map">
            <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view", 
	".default", 
	array(
		"API_KEY" => "",
		"CONTROLS" => array(
			0 => "ZOOM",
			1 => "SMALLZOOM",
			2 => "MINIMAP",
			3 => "TYPECONTROL",
			4 => "SCALELINE",
			5 => "SEARCH",
		),
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:5:{s:10:\"yandex_lat\";d:48.475443556892536;s:10:\"yandex_lon\";d:135.0864466976473;s:12:\"yandex_scale\";i:14;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:135.08664601186914;s:3:\"LAT\";d:48.47552195158903;s:4:\"TEXT\";s:81:\"г. Хабаровск, ул. Павловича 13, помещение I (50-54)\";}}s:9:\"POLYLINES\";a:0:{}}",
		"MAP_HEIGHT" => "300",
		"MAP_ID" => "",
		"MAP_WIDTH" => "100%",
		"OPTIONS" => array(
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_RIGHT_MAGNIFIER",
			3 => "ENABLE_DRAGGING",
		),
		"COMPONENT_TEMPLATE" => ".default"
	),
	false
);?>
        </div>
    </div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>