<?php

// Подключаем файл конфигурации проекта
require_once('../cfg/config.php');

// Обработка формы
$res = (string)my_calc_equally();
// берем из GET значения чтобы,
// после обработки формы, подставить
// в input ы исходные для расчетов значения
$x = $_GET['x'];
$y = $_GET['y'];

echo render(TPL_DIR . 'index.tpl', [
    'title' => 'Калькулятор-1',
    'logo' => IMG_DIR . 'image-bee.png',
    'active-1' => 'active',
    'active-2' => '',
    'calc_name' => 'Калькулятор -1',

    'content' => render(TPL_DIR . 'calc-1.tpl', [

        'action' => 'calc-1.php',
        'x' => $x,
        'y' => $y,
        'res' => $res
    ])


]);
echo '<pre>';

print_r($_GET);




