<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:54
 */

function getView($name,$data=""){
    return require_once $_SERVER['DOCUMENT_ROOT']."/views/".$name.".php";
}

function getHeader($data=""){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/header.php";
}


function getFooter($data=""){
    return require_once $_SERVER['DOCUMENT_ROOT']."/controllers/footer.php";
}


//формирование ссылки
function mylink($name,$id){
    return "/index.php?route=".$name."&".$name."_id=".$id;
}
