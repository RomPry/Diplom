<?php
$errcode = array(
    '404' => 'Запрошенный ресурс не существует!'
);
$title = "Ошибка!";
?>

<?php include_once('views/common/header.php'); ?>

<div class="container">

    <div class="">
        <div class="">
            Ошибка
        </div>
        <div class="">
            <h5 class="">Упс, что-то пошло не так!</h5>
            <p class=""><span class="text-danger"><?= $errcode[$num]; ?> </span></p>
            <a href="<?= FULL_SITE_ROOT . 'main/index'; ?>" class="btn btn-primary">На главную</a>
        </div>
        <div class="">
            Код ошибки: <?= $num; ?>
        </div>
    </div>

</div>

<?php include_once('views/common/footer.php'); ?>