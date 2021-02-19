<?php

class CompanydetailController {

    public function actionIndex() {
        $title = "Реквизиты";
        include_once('views/company-detail/index.php');
        return;
    }

}

?>