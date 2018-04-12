<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:59
 */


//require_once ($_SERVER['DOCUMENT_ROOT']."/views/home.php");
$data['category']=getCategoriesList($connect);

render('information',$data);
