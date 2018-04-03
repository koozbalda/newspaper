<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:59
 */

$data=array();

$sql="SELECT * FROM news ORDER BY `news_id` DESC LIMIT 10";

$query=mysqli_query($connect,$sql);
while ($res[]=mysqli_fetch_assoc($query)){
    $result=$res;
}
if (!empty($result)) {


    foreach ($result as $key => $value) {

    }
}
getView('home',$data);
//require_once ($_SERVER['DOCUMENT_ROOT']."/views/home.php");



?>