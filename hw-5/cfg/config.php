<?php
// Определяем константы путе1 для подключаемых файлов,
// используя глобальную константу __DIR__
define('SITE_DIR', __DIR__."/../");
define('ENGINE_DIR', SITE_DIR."engine/");
define('TPL_DIR', SITE_DIR.'tpl/');
define('WWW_DIR', SITE_DIR.'www/');

define('IMG_DIR', 'img/');

// Определяем константы для подключения к базе данных
define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASS', '123');
define('DB_NAME', 'hw-5');

// Подключаем файлы с функциями:
// -
require_once(ENGINE_DIR . 'f-render.php'); // здесь render() функция
require_once(ENGINE_DIR . 'f-gallery.php'); // здесь функции работы по созданию галереи и картинок

// - для работы с базой
require_once(ENGINE_DIR . 'f-db.php'); // здесь функции для работы с базой данных