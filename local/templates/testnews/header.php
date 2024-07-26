<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?php 
use Bitrix\Main\Page\Asset;
$asset = Asset::getInstance();
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <?php 
        $APPLICATION->ShowHead();
    ?>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php $APPLICATION->ShowTitle(); ?></title>
    <?php 
        Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/style.css');
    ?>
</head>
<body>

<div id="panel"><?php $APPLICATION->ShowPanel(); ?></div>
        <div class="container">
        <div id="header">
          <h1><a href="http://test-project/">Новости</a></h1></br>
        </div>