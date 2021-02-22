<?php

class OurteamController {

    public function actionIndex() {
        $title = "Наша команда";
        include_once('views/our-team/index.php');
        return;
    }

}