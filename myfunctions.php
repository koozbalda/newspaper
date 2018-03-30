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

    $sql="SELECT * FROM news ORDER BY `news_id` DESC LIMIT 1";

    $query=mysqli_query($connect,$sql);
    while ($res[]=mysqli_fetch_assoc($query)){
        $result=$res;
    }
    return $result;
}

function showOneNews($news=[]){
    $sourse=$news['news_image'];
//    $sourse=substr($news['news_image'],1);
//    var_dump($sourse);
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