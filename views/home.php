<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:59
 */

?>
<div class="container">
    <div class="row">
        <?php
        foreach ($data['news'] as $key=>$value){
                echo ' <div class="col-md-6 col-sm-12">
                        <h2 class="text-center"><a href="'.mylink('news',$value['news_id']).'">'.$value['news_header'].'</a></h2>
                          <img src="'.$value["news_image"].'" alt="" class="img-rounded center-block" width="40%">
                         <p>'.$value['news_pre'].'</p>
                         <p><a class="btn btn-info" style="width: 100%" href="'.mylink('category',$value['category_id']).'" role="button">Все новости в категории »</a></p>
                        </div>';
        }
?>
    </div>
<div>

