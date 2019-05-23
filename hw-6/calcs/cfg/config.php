<?php
// Определяем константы путе1 для подключаемых файлов,
// используя глобальную константу __DIR__
define('SITE_DIR', __DIR__."/../");
define('ENGINE_DIR', SITE_DIR."engine/");
define('TPL_DIR', SITE_DIR.'tpl/');
define('WWW_DIR', SITE_DIR.'www/');

define('IMG_DIR', 'img/');

// Подключаем файлы с функциями:
// -
require_once(ENGINE_DIR . 'f-render.php'); // здесь render() функция
require_once(ENGINE_DIR . 'f-calc.php'); // поключили функции для калькулятора