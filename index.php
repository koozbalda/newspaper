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
require_once $_SERVER['DOCUMENT_ROOT']. "/system/request.php";

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);
mysqli_query($connect,"SET CHARSET UTF8");

if($_SERVER['REQUEST_URI']=='/'){
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/home.php";
}elseif(!empty($filename)&& file_exists($filename)){
    require_once $filename;
}else{
    require_once $_SERVER['DOCUMENT_ROOT']."/controllers/404.php";
}




