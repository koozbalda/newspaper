<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:58
 */

//require_once ($_SERVER['DOCUMENT_ROOT']."/views/category.php");
if (!empty($_GET['route']) && !empty($_GET['category_id'])) {

    $data['category'] = getCategoriesList($connect);
    $data['news']=allNewsInCat($connect,$_GET['category_id']);
//    var_dump(allNewsInCat($connect,$_GET['category_id']));
//    exit();
    $data['title']='Новосоти в категории'.$data['category'][$_GET['category_id']];
    render('home', $data);
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
}

