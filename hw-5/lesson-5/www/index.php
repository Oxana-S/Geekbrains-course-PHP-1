<?php
require_once('../cfg/config.php');

echo render(TPL_DIR . 'index-tpl.txt', [
        'title' => 'ДЗ-5',
        'h1'=>'Главная',
        'content-0' => 'Содержание главного блока',
        'content-1'=> ' Здесь для главной выводиться дополнительный контент,<br>
                        а для галереи должны выводиться картинки',
        'data' => date('Y')
    ]
);
