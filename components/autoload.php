<?php

    // автоматически делает подключение файлов с классами, если выполняется создание экземпляра класса
	spl_autoload_register(function ($class) {

		$dirs = array('components', 'controllers', 'models');
		$classExist = false;
        foreach ($dirs as $dir) {
			//$filePath = $dir . '/' . strtolower($class) . '.php';
			$filePath = $dir . '/'. $class . '.php';
            if (file_exists($filePath)) {
				include_once($filePath);
                $classExist = true;
				break;
			}
		}
            if ($classExist === false){
            echo "Файл с классом: <b>$class</b> не найден! Пожалуйста создайте файл с классом <b>$class</b>";
            die;
        }
        
	});

?>