<?php
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 29.03.2018
 * Time: 13:49
 */
require_once ("header.php");


if(!empty($_GET['category'])){
    if(!empty(getCategoryNews($connect,$_GET['category']))){
        foreach ( getCategoryNews($connect,$_GET['category'])as $value){
            print showOnePreNews($value);
        }
    }else{
        print showOneNews([]);
    }
}

if(!empty($_GET['news'])){
    if(!empty(getThisNews($connect,$_GET['news']))){
            print showOneNews(getThisNews($connect,$_GET['news']));
    }else{
        print showOneNews([]);
    }
}

require_once ("footer.php");

