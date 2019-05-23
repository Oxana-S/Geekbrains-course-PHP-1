<?php
// Подключаем файл конфигурации проекта
require_once('../cfg/config.php');

/*
функция() - калькулятор-1, кнопка "=" она же запускает расчет
            выбор орерандов через тег <selection>
*/
function my_calc_equally(){
    if (isset($_GET['x']) && isset($_GET['y'])) {
        $x = (int)$_GET['x'];
        $y = (int)$_GET['y'];
    } elseif (($_GET['x'] == '') && ($_GET['y'] == '')){

        $result = '*Введите значения в калькулятор';
    }
    if (isset($_GET['operand'])) {
        $operand = htmlspecialchars($_GET['operand']);
    }
    switch ($operand) {
        case '+':
            $result = $x + $y;
            break;
        case '-':
            $result = $x - $y;
            break;
        case '*':
            $result = $x * $y;
            break;
        case '/':
            if ($y == 0) {
                $result = '*На "н0ль" делить нельзя';
            } else {
                $result = $x / $y;
            }
            break;
    }
    return $result;

}

/*
функция() - калькулятор-2, кнопки "+", "-", "*", "/" запускают расчет
*/
function my_calc_operand() {

    $result = [];
    if (isset($_GET['x']) && isset($_GET['y'])) {
        $x = (int)$_GET['x'];
        $y = (int)$_GET['y'];
    } elseif (($_GET['x'] == 0) && ($_GET['y'] == 0)){

       $result['message'] = '*Введите значения в калькулятор';
    }

    if (isset($_GET['+']) && $_GET['+']== '+') {
        $result['result'] = $x + $y;
    } elseif (isset($_GET['-'])) {
        $result['result'] = $x - $y;
    } elseif (isset($_GET['*'])) {
        $result['result'] = $x * $y;
    } elseif ($y === 0) {
        $result['message'] = '*На "н0ль" делить нельзя';
    } elseif (isset($_GET['/'])) {
        $result['result'] = $x / $y;
    }
    return $result;
}