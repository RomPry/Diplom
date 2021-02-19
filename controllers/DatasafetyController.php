<?php

class DatasafetyController {

    public function actionIndex() {
        $title = "Безопасность";
        include_once('views/data-safety/index.php');
        return;
    }

}