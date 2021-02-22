<?php

class ReturnController {

    public function actionIndex() {
        $title = "Возврат товара";
        include_once('views/return/index.php');
        return;
    }

}