<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

?>
<?php 
	foreach ($arResult["ITEMS"] as $arItem) :?>
	<div class="card-container high-tech">
		<a href="<?=$arItem['DETAIL_PAGE_URL'];?>" class="card-link">
                <div class="card-category">Новости</div>
                <div class="card-body">
                    <div class="card-content">
                        <div class="card-title">
							<?=$arItem['NAME'];?>
                        </div>
                        <div class="card-extract"><?=$arItem['PREVIEW_TEXT'];?></div>
                        <div class="card-date"><?=$arItem['DATE_CREATE'];?></div>
                    </div>
                    <img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="image" class="card-thumb">
                </div>
				</a>
            </div>
<?php endforeach; ?>
<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br /><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
