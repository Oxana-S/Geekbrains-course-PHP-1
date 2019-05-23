<?php

// Подключаем файл конфигурации проекта
require_once('../cfg/config.php');


$res = (string)my_calc_equally();
$x = $_GET['x'];
$y = $_GET['y'];

echo render(TPL_DIR . 'index.tpl', [
    'title' => 'Калькулятор-2',
    'logo' => IMG_DIR . 'image-bee.png',
    'active-1' => '',
    'active-2' => '',
    'calc_name' => 'Калькуляторы',
    'content' => 'Выберите в верхнем меню калькулятор для расчетов'
]);

echo '<pre>';
print_r($_GET);




