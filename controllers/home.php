<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:59
 */

$data=array();
//Подготовка данных для вьюхи
$result=getLastTenNews($connect);
if (!empty($result)) {
        $data['news']=$result;
}
$data['category']=getCategoriesList($connect);
$data['title']='Последние новости';
render('home',$data);



?>