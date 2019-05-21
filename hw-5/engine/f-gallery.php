<?php
/* **********************************************************
Функции() для работы с галереей, методом получение строк
путей к файлам с картинками из БАЗЫ ДАННЫХ с этими картинками
********************************************************** */

/*
функция get_images() - подключается к базе под логином, по запросу
получает массив с данными из таблицы с картинкми из базы данных
и закрывает соединение с базой
*/
function get_images()
{
    $scl = "SELECT * FROM `images` ORDER BY `images`.`views` DESC" ;

    return getAssocResult($scl);
}


/*
функция create_gallery() - принимает массив:
$images = [
            ['id' => '1',
                'url' => 'img/1.jpg',
                'views' => '30',
                'title' => 'Картинка 1',
                'size' => '0'
            ],
            ['id' => '8',
                'url' => 'img/8.jpg',
                'views' => '5',
                'title' => 'Картинка 8',
                'size' => '0'
            ],
            ...
          ];
и возвращает строковую переменную $result со ссылками на картинки
с подставленными  значениями в 'url' и 'id'? вместо ключей {{URL}} и {{ID}},
прописанных в шаблоне gallery.tpl
*/
function create_gallery ()
{
    $result = '';
    $images = get_images();

    foreach ($images as $image) {

        if (is_file(WWW_DIR . $image['url']))
        {
            $result .= render(TPL_DIR . 'gallery.tpl', $image);
        }
    }

    return $result;
}

// **************************************************
/*
функция get_image() -
*/
function get_image($id)
{
    $sql = "SELECT * FROM `images` WHERE `id` = $id";

    return show_first($sql);
}

/*
функция update_views() -
*/
function update_views($id, $views = false)
{
    $view_string = $views ? (int)$views : '`views` + 1';
    $sql = "UPDATE `images` SET `views` = $view_string WHERE `id` = $id";

    return execQuery($sql);
}
/*
функция show_image() -
*/
function show_image($id)
{
    $image = get_image($id);
    if (!$image){
        echo '404';
    }

    update_views($id);
//    $image['views']++;
    var_dump($image);

    return render(TPL_DIR . 'image.tpl', $image);
}