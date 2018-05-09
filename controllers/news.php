<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:58
 */



if (!empty($_GET['route']) && !empty($_GET['news_id'])) {

    $data['category'] = getCategoriesList($connect);

    $data['title']=$data['news']['news_header'];

    $data['news']=getNewsById($connect,$_GET['news_id']);
    if(!empty($data['news'])){

        render('news',$data);
    }else{
        require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
    }
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
}