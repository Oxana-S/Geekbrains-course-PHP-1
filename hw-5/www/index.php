<?php
require_once('../cfg/config.php');

echo render(TPL_DIR . 'index.tpl', [
        'title' => 'ДЗ-5',
        'h1'=>'Главная',
        'content' => 'Содержание главного блока',

        'data' => date('Y')
    ]
);
