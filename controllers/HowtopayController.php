<?php

class HowtopayController {

    public function actionIndex() {
        $title = "Оплата";
        include_once('views/how-to-pay/index.php');
        return;
    }

}

?>