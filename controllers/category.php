<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:58
 */
//Данные для пагинации
$data['per_page'] = empty($_GET['per-page']) ? 5 : $_GET['per-page'];

$id = !empty($_GET['category_id']) ? $_GET['category_id'] : false;

$data['last_page'] = ceil(getCountRows($connect, $id) / $data['per_page']);

$data['page'] = empty($_GET['page']) || $_GET['page'] > $data['last_page'] ? 1 : $_GET['page'];
//закончили формирование  данных для пагинации

if (!empty($_GET['route']) && !empty($_GET['category_id'])) {
//список для вывода категорий
    $data['category'] = getCategoriesList($connect);
//Берем из базы новости
    $data['news'] = allNewsInCat($connect, $_GET['category_id'], $data['page'], $data['per_page']);
    $data['title'] = 'Новосоти в категории ' . $data['category'][$_GET['category_id']];

    if (!empty($data['news'])) {
        render('category', $data);
    } else {
        require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
    }
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
}

