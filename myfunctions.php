<?php

/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 30.03.2018
 * Time: 10:03
 */
require_once ("dbconnect.php");

//
function getArrayCategoryNames($connect){

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


function getLastTenNews($connect){

    $sql="SELECT * FROM news ORDER BY `news_id` DESC LIMIT 10";

    $query=mysqli_query($connect,$sql);
    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    return $result;
}


function getThisNews($connect,$news_id){

    $sql="SELECT * FROM news WHERE news_id='{$news_id}'";
    $query=mysqli_query($connect,$sql);
    return mysqli_fetch_assoc($query);
}

function getCategoryNews($connect,$category_id){

    $sql="SELECT * FROM news WHERE category_id='{$category_id}'";
    $query=mysqli_query($connect,$sql);
    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    return $result;
}


function showOneNews($news=[]){

    if(empty($news)){
        return require('/error/404.htm');
    }

    $sourse=$news['news_image'];
    $str="<div style='padding-left: 20%;padding-right: 10%'>
                <div class='h2' align='center'>".$news['news_header']."</div>
                      <div>
                        <img style='display: block;margin: 0 auto' src=".$sourse." class='img-rounded'>
                     </div>
                     <div class='text-justify'> {$news['news_body']}
                    </div>
                </div>
          </div>";
    return $str;
}


function showOnePreNews($news=[]){

    if(empty($news)){
        return null;
    }

    $sourse=$news['news_image'];
    $str="<div style='padding-left: 20%;padding-right: 10%'>
                <a href='/?news={$news['news_id']}'>
                <div class='h2' align='center'>".$news['news_header']."</div>
                </a>
                      <div>
                        <img style='display: block;margin: 0 auto' src=".$sourse." class='img-rounded'>
                     </div>
                     <div class='text-justify'> {$news['news_pre']}
                    </div>
                </div>
          </div>";
    return $str;
}