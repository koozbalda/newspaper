<?php
session_start();
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 10.05.2018
 * Time: 16:11
 */
require_once "config.php";

if (empty($_SESSION['success'])) {
    header('Location: /admino4ka/login.php');
    exit();
}
if(!empty($_GET['news_id'])){
    $query="DELETE FROM `news` WHERE `news_id`={$_GET['news_id']}";
    $result=mysqli_query($connect,$query);
    $_SESSION['last_delete']=$result;
}
header('Location: /admino4ka/index.php');
exit();