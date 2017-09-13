<?php require_once ($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/main/include.php");?>

<?php
$PRODUCT_ID = $_POST['ID'];
$PRODUCT_COUNT = $_POST['QUANTITY'];

if (CModule::IncludeModule("catalog")) {
    if ($PRODUCT_ID && $PRODUCT_COUNT) {
        Add2BasketByProductID(
            $PRODUCT_ID,
            $PRODUCT_COUNT,
            false
        );
        //LocalRedirect("/personal/order/make/");
//        $_POST['order-id'] = '';
//        $_POST['order-count'] = '';
    }
}
?>