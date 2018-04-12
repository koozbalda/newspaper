<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:54
 */

function getView($name,$data=null){
    return require_once $_SERVER['DOCUMENT_ROOT']."/views/".$name.".php";
}

function getHeader($data=null){
    return require_once $_SERVER['DOCUMENT_ROOT']."/views/header.php";
}


function getFooter($data=null){
    return require_once $_SERVER['DOCUMENT_ROOT']."/views/footer.php";
}

function getCategoriesList($connect){
    $sql="SELECT `category_id`,`category_name` FROM category ORDER BY `category_name`";

    $query=mysqli_query($connect,$sql);
    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    foreach ($result as $value){
        $r[$value['category_id']]=$value['category_name'];
    }
    return $r;
}

function render($name,$data=null){

    getHeader($data);
    getView($name,$data);
    getFooter($data);
}


//формирование ссылки
function mylink($name,$id=null){
    if($id==null){

        return "/index.php?route=".$name;
    }
    return "/index.php?route=".$name."&".$name."_id=".$id;
}
