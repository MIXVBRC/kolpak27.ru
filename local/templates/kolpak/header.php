<? if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
// Namespace D7
use Bitrix\Main\Page\Asset;
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= $APPLICATION->ShowTitle() ?></title>

    <?

    // Для подключения css
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/all.min.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/reset.css");
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/css/style.min.css");

    // Для подключения скриптов
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/jquery.js");
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/js/script.js");

    // Для вывода строки в секцию <head> ... </head>, например можно добавить шрифт
    Asset::getInstance()->addString("<link href=\"https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap\" rel=\"stylesheet\">");

    $APPLICATION->ShowHead();

    ?>
</head>
<body<?= ($APPLICATION->GetCurPage(false) == '/' ? "" : " class=\"inner\"") ?>>

    <div class="wrapper">

        <header class="header">
            <div>
                <?$APPLICATION->ShowPanel();?>
                <?$APPLICATION->GetDirProperty("keywords");?>
            </div>
            <div class="header__top">

                <div class="container">
                    <div class="header__body">

                        <div class="header__contacts">
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

                        <?/*
                        <div class="search">
                            <form action="" class="search__form">
                                <input class="search__text" type="text"><button class="search__button"><i class="fa fa-magnifying-glass"></i></button>
                            </form>

                            <div class="search__button search__mobile"><i class="fa fa-magnifying-glass"></i></div>

                            <div class="search__close"><i class="fa fa-xmark"></i></div>
                        </div>
                        */?>


                    </div>

                </div>
            </div>

            <div class="header__bottom">
                <div class="container">
                    <div class="header__body">

                        <div class="logo">
                            <a href="<?= ($APPLICATION->GetCurPage(false) == '/' ? "javascript:void(0)" : "/") ?>" class="logo__link">
                                <img src="<?=SITE_TEMPLATE_PATH?>/images/logo.png" alt="kolpak_logo" class="logo__img">
                            </a>
                        </div>

                        <?$APPLICATION->IncludeComponent(
                            "bitrix:menu",
                            "menu-top",
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

                        <div class="burger"><i class="fa fa-bars"></i></div>

                    </div>
                </div>
            </div>



        </header>

        <main class="main">

            <?if ($APPLICATION->GetCurPage(false) != '/'):?>
                <div class="container">

                    <div class="inner-top">
                        <h1 class="title-inner"><?$APPLICATION->ShowTitle(false);?></h1>
                        <?$APPLICATION->IncludeComponent(
                            "bitrix:breadcrumb",
                            "",
                            Array(
                                "PATH" => "",
                                "SITE_ID" => "s1",
                                "START_FROM" => "1"
                            )
                        );?>
                    </div>

                    <div class="main__body<?=$APPLICATION->GetDirProperty('SIDEBAR') != 'N'?'':' nosidebar'?>">
                        <div class="main__content">
            <?endif;?>