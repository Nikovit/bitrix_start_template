<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="icon" type="image/svg+xml" href="/favicon.svg">

    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->ShowMeta("robots") ?>
    <? $APPLICATION->ShowMeta("keywords") ?>

    <?

    use Bitrix\Main\Page\Asset;

    // Bootstrap
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/vendor/bootstrap/css/bootstrap.min.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/vendor/bootstrap/js/bootstrap.js');
    // JS
    CJSCore::Init(array("jquery"));
    // STRING
    Asset::getInstance()->addString("<meta name='viewport' content='width=device-width, initial-scale=1'>");
    // Fonts
    Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800&amp;subset=cyrillic' rel='stylesheet'>");
    // Swiper-slider
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/vendor/swiper-slider/swiper-bundle.min.css');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/vendor/swiper-slider/swiper-bundle.min.js');
    //    // Fancybox
    //    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/vendor/fancybox/fancybox.css');
    //    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/vendor/fancybox/fancybox.umd.js');

    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');

    ?>

</head>
<body>

<header>

</header>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

