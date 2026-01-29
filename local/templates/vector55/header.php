<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Page\Asset;

Asset::getInstance()->addString('<meta charset="utf-8">');
Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">');

// Bootstrap
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/bootstrap/css/bootstrap.min.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/bootstrap/js/bootstrap.bundle.min.js');

// Swiper-slider
Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/swiper-slider/swiper-bundle.min.css');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/swiper-slider/swiper-bundle.min.js');

//    // Fancybox
//    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/assets/fancybox/fancybox.css');
//    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/assets/fancybox/fancybox.umd.js');

// Fonts
//Asset::getInstance()->addString("<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400i,700,800&amp;subset=cyrillic' rel='stylesheet'>");

// JS
//CJSCore::Init(array("jquery"));
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/script.js');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="icon" href="/favicon.svg">
    <? $APPLICATION->ShowHead(); ?>
    <? $APPLICATION->ShowMeta("robots") ?>
    <? $APPLICATION->ShowMeta("keywords") ?>
</head>
<body>
<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<header>

</header>



