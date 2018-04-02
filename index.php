<?php
session_start();
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 29.03.2018
 * Time: 13:49
 */



if(!empty($_GET['route'])){
    $filename=$_SERVER['DOCUMENT_ROOT']."/controllers/".$_GET['route'].".php";
}

require_once $_SERVER['DOCUMENT_ROOT']. "/config.php";
require_once $_SERVER['DOCUMENT_ROOT']."/system/request.php";

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_query($connect,"SET CHARSET UTF8");

if($_SERVER['REQUEST_URI']=='/'){
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/home.php";
}elseif(!empty($filename)&& file_exists($filename)){
    require_once $filename;
}else{
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/404.php";
}






//
//require_once ("header.php");
//
//
//if(!empty($_GET['category'])){
//    if(!empty(getCategoryNews($connect,$_GET['category']))){
//        foreach ( getCategoryNews($connect,$_GET['category'])as $value){
//            echo "<div class=\"col-md-4\">";
//            print showOnePreNews($value);
//            echo "</div>";
//        }
//    }else{
//        echo showOneNews([]);
//    }
//}
//
//if(!empty($_GET['news'])){
//    if(!empty(getThisNews($connect,$_GET['news']))){
//            print showOneNews(getThisNews($connect,$_GET['news']));
//    }else{
//        print showOneNews([]);
//    }
//}
//
//require_once ("footer.php");
//
