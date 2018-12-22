<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Текуща дата и время");
?><? $APPLICATION->IncludeComponent(
"Time:date.current",
".default",
Array(
),
false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>