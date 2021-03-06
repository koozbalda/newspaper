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

    chkDate($query);

    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    foreach ($result as $value){
        $r[$value['category_id']]=$value['category_name'];
    }
    return $r;
}


/*
function getCatDesc($connect,$id){
    $sql="SELECT `category_description`,`category_name` FROM category WHERE `category_id`=$id";

    $query=mysqli_query($connect,$sql);
    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
//    foreach ($result as $value){
//        $r[$value['category_id']]=$value['category_name'];
//    }
    return $result;
}
*/

function getLastTenNews($connect,$page=false,$per_page=10){

    if($page){
        $begin=($page-1)*$per_page;
        $sql="SELECT * FROM news ORDER BY `news_id` DESC LIMIT {$begin},{$per_page}";

    }else{

        $sql="SELECT * FROM news ORDER BY `news_id` DESC LIMIT 10";
    }
    $query=mysqli_query($connect,$sql);

    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    return $result;
}



//
function allNewsInCat($connect,$id,$page=false,$per_page=10){

    if($page){
        $begin=($page-1)*$per_page;
        $sql="SELECT * FROM news WHERE `category_id`=".$id." ORDER BY `news_id` DESC LIMIT {$begin},{$per_page}";

    }else{

        $sql="SELECT * FROM news WHERE `category_id`=".$id." ORDER BY `news_id`";
    }

    $query=mysqli_query($connect,$sql);

    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    return $result;
}


function getCountRows($connect,$id=false){

    if($id){
        $query="SELECT COUNT(*) AS kol from `news` WHERE `category_id`={$id}";
    }else{
        $query="SELECT COUNT(*) AS kol from `news`";

    }
    $res=mysqli_fetch_assoc(mysqli_query($connect,$query));
    return $res['kol'];
}

//Одну новость по АйДи
function getNewsById($connect,$id){

    $sql="SELECT * FROM `news` WHERE `news_id`=".$id;
    $query=mysqli_query($connect,$sql);

    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    return $result;
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


function chkDate($q){
    if(empty($q)){
        echo "Запрос к базе не вернул результата!<br/>Проверьте наличиче базы/таблицы/данных в таблице.";
        exit();
    };
    return true;
}

