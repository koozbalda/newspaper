<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:58
 */

//require_once ($_SERVER['DOCUMENT_ROOT']."/views/category.php");

$data['category']=getCategoriesList($connect);

render('category',$data);