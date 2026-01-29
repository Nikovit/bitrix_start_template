<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?
IncludeTemplateLangFile(__FILE__);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="ru" lang="ru">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <? $APPLICATION->ShowHead(); ?>
</head>
<body>

<header>

</header>

<div id="panel"><? $APPLICATION->ShowPanel(); ?></div>

