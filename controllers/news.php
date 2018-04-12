<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:58
 */


$data['category']=getCategoriesList($connect);

render('news',$data);

