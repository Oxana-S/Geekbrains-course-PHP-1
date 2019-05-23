<?php

// Подключаем файл конфигурации проекта
require_once('../cfg/config.php');

/* ******************************************
render() - Функция-Шаблонизатор, предназнвчена
для вывода в виде строк код в фалы шаблонов с
html кодом
****************************************** */

function render($file, $variables = [])
{
    if (!is_file($file)) {
        echo 'Template file "' . $file . '" not found';
        exit();
    }

    if (filesize($file) === 0) {
        echo 'Template file "' . $file . '" is empty';
        exit();
    }

    $templateContent = file_get_contents($file);

    foreach ($variables as $key => $value) {
        if (!is_string($value)) {
            continue;
        }
        $key = '{{' . strtoupper($key) . '}}';
        $templateContent = str_replace($key, $value, $templateContent);
    }

    return $templateContent;
}


