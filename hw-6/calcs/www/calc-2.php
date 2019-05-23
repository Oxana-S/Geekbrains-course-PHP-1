<?php

// Подключаем файл конфигурации проекта
require_once('../cfg/config.php');


$buffer = my_calc_operand();

if (isset($buffer['message'])) {
    $message = $buffer['message'];
} else {
    $message = '';
}

$res = (string)$buffer['result'];

$x = $_GET['x'];
$y = $_GET['y'];


echo render(TPL_DIR . 'index.tpl', [
    'title' => 'Калькулятор-2',
    'calc_2' => '.calc_2 {
                   display: flex;
                   flex-direction: column;
                   align-items: center;
                 }
                 form input {
                    width: 200px;
                    height: 40px;
                    margin-bottom: 10px;
                 }
                 .submit input {
                    width: 40px;
                 /* margin-top: 10px;
                    margin-bottom: 10px;    
                    margin-right:10px;*/
                 }
                    
                    ',
    'logo' => IMG_DIR . 'image-bee.png',
    'active-1' => '',
    'active-2' => 'active',
    'calc_name' => 'Калькулятор - 2',
    'content' => render(TPL_DIR . 'calc-2.tpl', [
        'action' => 'calc-2.php',
        'x' => $x,
        'y' => $y,
        'res' => $res,
        'message' => $message

    ])
]);
echo '<pre>';
print_r($_GET);




