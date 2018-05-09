<div class="container">
    <div class="row">
        <?php
        if(!empty($data['news'])) {
            foreach ($data['news'] as $key => $value) {
                $news= ' <div  class="col-md-12 col-sm-12">';
                $news.='<p><a class="btn-info" style="width: 100%" href="' . mylink('category', $value['category_id']) . '" role="button">Все новости в категории » '.$data['category'][$value['category_id']].'</a></p>';
                $news.= '<h2 class="text-center">'. $value['news_header'] . '</h2>

                          <img src="' . $value["news_image"] . '"class="img-rounded img-responsive" width="200px" align="left" style="padding-right: 10px">
                        <p>' . $value['news_body'] . '</p>
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