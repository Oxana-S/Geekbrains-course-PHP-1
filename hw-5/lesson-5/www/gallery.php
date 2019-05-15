<?php
require_once('../cfg/config.php');

$results = getAssocResult('SELECT * FROM `images` ORDER BY `images`.`views` DESC');

foreach ($results as $result) {
    if(is_file(WWW_DIR . $result['url'])){
        $img_name .= WWW_DIR . $result['url'];
    }
}



echo render(TPL_DIR . 'index-tpl.txt', [
    'title' => 'Галерея',
    'h1' => 'ГАЛЕРЕЯ',
    'content-0' => 'Здесь будут картинки '.'<br>'. render(TPL_DIR . 'gallery-item.txt', [
            'src' => render(TPL_DIR . 'gallery-item.txt', [
               'src'=> $img_name
            ])
        ]),

    'data' => date('Y')
]);

var_dump($img_name);
die();