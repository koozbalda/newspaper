<?php
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 29.03.2018
 * Time: 13:49
 */
require_once ("header.php");

// Создаем цикл, в теле которого конструкция include
//for($i=1; $i<=65; $i++) {
//    $path="{$_SERVER['DOCUMENT_ROOT']}/images/{$i}.txt";
//    if(file_exists($path)){
//        require $path;
//        echo"<br>";
//    }else{
//
//        echo  "../images/{$i}.txt - not found";
//        echo"<br>";
//    }
//
//}
// Включили десять файлов: 1.txt, 2.txt, 3.txt ... 10.txt
// Результат - вывод 12345678910
?>
<button class = "btn btn-success">Ура, я подключил Bootstrap!</button>
