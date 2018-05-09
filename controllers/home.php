<?php

$result = getLastTenNews($connect);
if (!empty($result)) {
    $data['news'] = $result;
}
$data['category'] = getCategoriesList($connect);
$data['title'] = 'Последние новости';
render('home', $data);


?>