<?php

class DeliveryController {

    public function actionIndex() {
        $title = "Доставка";
        include_once('views/delivery/index.php');
        return;
    }

}