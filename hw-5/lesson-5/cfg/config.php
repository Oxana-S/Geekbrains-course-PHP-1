<?php
// Определяем константы путе1 для подключаемых файлов,
// используя глобальную константу __DIR__
define('SITE_DIR', __DIR__."/../");
define('ENGINE_DIR', SITE_DIR."engine/");
define('TPL_DIR', SITE_DIR.'tpl/');
define('WWW_DIR', SITE_DIR.'www/');

define('IMG_DIR', 'img/');

// Определяем константы для подключения к базе
define('DB_HOST', 'localhost');
define('DB_USER', 'user');
define('DB_PASS', '123');
define('DB_NAME', 'hw-5');

// Подключаем файлы с функциями:
// - для работы с шаблонами
require_once (ENGINE_DIR . 'main-functions.php');
require_once (ENGINE_DIR . 'gallery-functions.php'); // здесь функции для получения имени картинок из папки с файлами
require_once  (ENGINE_DIR . 'db-gallery-functions.php'); // здесь функции для получения имени картинок из базы данных

// - для работы с базой
require_once (ENGINE_DIR . 'db.php');