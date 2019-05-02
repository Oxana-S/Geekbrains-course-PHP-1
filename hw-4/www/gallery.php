<?php
require_once('../cfg/config.php');
$gallery = galleryCreate(IMG_DIR); // Вариант-1. Здесь в функции используется шаблон gallery-item.tpl
//$gallery = my_galleryCreate(IMG_DIR); // Вариант -2. Не самый лучший
echo render(TPL_DIR . 'index-tpl.txt', [
    'h1'=> 'Галерея',
        'content-0' => 'Здесь должны выводиться картинки.<br>',
//        '---' => include(TPL_DIR . 'gallery-tpl.txt'), // Выводит галерею,!!! НО ВНЕ КОДА HTML
        'content-1'=> $gallery
    ]
);
