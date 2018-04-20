<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:59
 */


$sql="SELECT * FROM information";
$query=mysqli_query($connect,$sql);
while ($res[]=mysqli_fetch_assoc($query)){
    $result=$res;
}
foreach ($result as $value){
    $r[$value['name_row']]=$value['information'];
}
if($r==null)
{

    require_once $_SERVER['DOCUMENT_ROOT'] . "/controllers/404.php";
}else{
    $data['category']=getCategoriesList($connect);
    $data['title']='Контакты';
    $data['information']=$r;
    render('information',$data);

}


