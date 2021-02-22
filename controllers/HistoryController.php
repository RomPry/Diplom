<?php

class HistoryController {

    public function actionIndex() {
        $title = "История бренда";
        include_once('views/history/index.php');
        return;
    }
    
}

?>