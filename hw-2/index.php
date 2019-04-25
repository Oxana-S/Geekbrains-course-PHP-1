<?php
echo '<h2>Домашнее задание. Урок №2</h2>';
//
// Задание 1
//
echo '<h3>*** Задание 1. Решение: </h3> ';
echo "<h4>Вариант №1: Ветвление через условие - if</h4>
<p>
    \$a = -12; <br>
    \$b = 9; <br>

    if (\$a * \$b < 0){<br>
    echo \$a + \$b;<br>
    } elseif (\$a < 0 && \$b < 0){<br>
    echo \$a * \$b;<br>
    } else {<br>
    echo \$a - \$b;<br>
    }
</p>";
$a = -12;
$b = 7;

if ($a * $b < 0) {
    echo "Проверка кода. Сумма: ", $a + $b;
} elseif ($a < 0 && $b < 0) {
    echo "Проверка кода. Произведение: ", $a * $b;
} else {
    echo "Проверка кода. Разница: ", $a - $b;
}
echo "<hr>";
echo "<h4>Вариант решения №2. Ветвление через множественный выбор - swich</h4>
\$a = -12; <br>
\$b = 9; <br>
\$c = true;<br>
switch (\$c) {<br>
case (\$a <= 0 && \$b <= 0):<br>
echo \"Проверка. Произведение: \", \$a * \$b;<br>
break;<br>
case (\$a >= 0 && \$b >= 0):<br>
echo \"Проверка. Разница: \", \$a - \$b;<br>
break;<br>
case (\$a < 0 || \$b < 0):<br>
echo \"Проверка. Сумма: \", \$a + \$b;<br>
break;<br>
default:<br>
echo \"Непонятно, как акой вариант решения появился?...\";
}";
echo '<br>';
$c = true;
switch ($c) {
    case ($a <= 0 && $b <= 0):
        echo 'Проверка кода . Произведение:', $a * $b;
        break;
    case ($a >= 0 && $b >= 0):
        echo 'Проверка кода . Разница:', $a - $b;
        break;
    case ($a < 0 || $b < 0):
        echo 'Проверка кода . Сумма:', $a + $b;
        break;
    default:
        echo 'Непонятно, какакой вариант решения появился ? ...';
}
echo '<hr>';
$href_algorithm = "https://www.draw.io/?state=%7B%22ids%22:%5B%221aYy8NLiJLYnkDp2QrddGUkfZu910Ilxl%22%5D,%22action%22:%22open%22,%22userId%22:%22113831405794858852335%22%7D#G1aYy8NLiJLYnkDp2QrddGUkfZu910Ilxl";
echo "<a href='$href_algorithm'>Ссылка на алгоритм решения задания на сайте drow.io<a>";
?>
<?php
//
//Задание 2.
//
echo '<h3>*** Задание 2. Решение: </h3>';
echo '
$a = 5;<br>
$b = (($a >= 0) && ($a < 15));<br>
if ($b == true) {<br>
    switch ($b) {<br>
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
        case $a: 
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }<br>
    }<br>
}<br>';
echo 'Проверка кода: ';
$a = 5;
$b = (($a >= 0) && ($a < 15));
if ($b == true) {
    switch ($b) {
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
        case $a:
            echo $a;
            $a++;
            if ($a > 15) {
                break;
            }
    }
}
?>
<?php
//
//Задание 3.
//
echo '<h3>*** Задание 3. Решение: </h3>';
// Функция сложения
function addition($a, $b)
{
    return $a + $b;
}

echo '<h5>Функция сложения</h5>
function addition($a, $b) {<br>
    return $a + $b;<br>
}<br>
Проверка функции: ', addition(5, 9);

// Функция Вычитания
function substruct($a, $b)
{
    return $a - $b;
}

echo '<h5>Функция вычитания</h5>
function substruct($a, $b) {<br>
    return $a - $b;<br>
}<br>
Проверка функции: ', substruct(5, 9);

// Функция Умножения
function multiply($a, $b)
{
    return $a * $b;
}

echo '<h5>Функция умножения</h5>
function multiply($a, $b) {<br>
    return $a * $b;<br>
}<br>
Проверка функции: ', multiply(5, 9);

// Функция Деления
function divide($a, $b)
{
    return $a / $b;
}

echo '<h5>Функция деления</h5>
function divide($a, $b) {<br>
    return $a / $b;<br>
}<br>
    Проверка функции: ', divide(8, 4);
?>
<?php
//
//Задание 4.
//
echo '<h3>*** Задание 3. Решение: </h3>';
function mathOperation($arg1, $arg2, $operation)
{
    switch ($operation) {
        case '+':
            echo addition($arg1, $arg2);
            break;
        case '-':
            echo substruct($arg1, $arg2);
            break;
        case '*':
            echo multiply($arg1, $arg2);
            break;
        case '/':
            if ($arg2 == 0) {
                echo 'На 0 делить нельзя';
            }
            echo divide($arg1, $arg2);
            break;
    }
}
$a = rand(0, 15);
$b = rand(0, 15);
echo 'Проверка кода: '; mathOperation($a, $b , '*');
?>
<?php
//
//Задание 5.
//
echo '<h3>*** Задание 3. Решение: </h3>';
echo '<h1>Текущий год: </h1>';
$date_year = date("Y");
//
?>
<!doctype html>
<html lang="en">
<body>
 <h1><?= $date_year?></h1>;
</body>
</html>



