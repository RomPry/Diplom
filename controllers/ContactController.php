<?php

class ContactController {

    public function actionIndex() {
        $title = "Контакты";
        include_once('views/contact/index.php');
        return;
    }

}

?>