<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);
?>

<?php if (!empty($arResult["ITEMS"])): ?>
    <div class="article-card">
        <?php foreach ($arResult["ITEMS"] as $arItem): ?>
            <div class="article-card__title"><?= isset($arItem['NAME']) ? $arItem['NAME'] : ''; ?></div>
            <div class="article-card__date"><?= isset($arItem["DISPLAY_ACTIVE_FROM"]) ? $arItem["DISPLAY_ACTIVE_FROM"] : ''; ?></div>
            <div class="article-card__content">
                <div class="article-card__image sticky">
                    <?php if ($arItem['PREVIEW_PICTURE']['SRC']): ?>
                        <img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>"
                             alt="<?= $arItem['PREVIEW_PICTURE']['ALT'] ?>"/>
                    <?php endif; ?>
                </div>
                <div class="article-card__text">
                    <div class="block-content" data-anim="anim-3">
                        <p><?= isset($arItem['PREVIEW_TEXT']) ? $arItem['PREVIEW_TEXT'] : ''; ?></p>
                    </div>
                    <a class="article-card__button" href="<?= $arItem['DETAIL_PAGE_URL'] ?>">Подробнее</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>
