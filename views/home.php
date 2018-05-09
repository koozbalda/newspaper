<div class="container">
    <div class="row">
        <?php
        if(!empty($data['news'])) {
            foreach ($data['news'] as $key => $value) {
                $news= ' <div  class="col-md-12 col-sm-12">';
//                if(empty($_GET['category_id'])){
//                    $news.='<p style="bottom: 0px"><a class="btn btn-info" style="width: 100%" href="' . mylink('category', $value['category_id']) . '" role="button">Все новости в категории » '.$data['category'][$value['category_id']].'</a></p>';
//                }
                $news.= '<h2 class="text-center"><a href="' . mylink('news', $value['news_id']) . '">' . $value['news_header'] . '</a></h2>
                          <img src="' . $value["news_image"] . '" alt="" class="img-rounded center-block" width="200px">
                         <p>' . $value['news_pre'] . '</p>
                         </div>';
                echo $news;
//
//
            }
        }else{
            echo"<h2>Ничего еще нет</h2>";
        }
?>
    </div>
<div>