<?php
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 03.04.2018
 * Time: 10:58
 */
?>
<style>
    div.my-class{
    border-radius:  10px;
    }
     div div.my-class{
        padding: 10px;
        /*width: 100%;*/
    }
    div.div-bottom{
        border-top-left-radius: 0;
        border-top-right-radius: 0;

    }
     div.div-top{
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    }
</style>

<div class="row my-class" style="background-color:#f7f7f7;margin: 0">
    <div  class="col-md-3 col-sm-12 col-xs-12" style="padding: 0;">
        <?php
        foreach ($data['information'] as $key=>$val){
                    echo '<div class="my-class">';
                    echo '<div class="my-class div-top navbar-inverse text-primary">'.$key.'</div>';
                    echo '<div class="my-class div-bottom bg-primary">'.$val.'</div>';
                    echo '</div>';
        }
        ?>
    </div>
    <div  class="col-md-9 col-sm-12 col-xs-12 my-class" style="background-color: #f7f7f7;padding: 0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d160.34767994137505!2d36.246164447279334!3d49.98205559921803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a08bfd5256eb%3A0xce917aae8844b90d!2z0KPQv9GA0LDQstC70LXQvdC40LUg0YLRgNGD0LTQsCDQuCDRgdC-0YbQuNCw0LvRjNC90L7QuSDQt9Cw0YnQuNGC0Ysg0L3QsNGB0LXQu9C10L3QuNGPINCn0LXRgNCy0L7QvdC-0LfQsNCy0L7QtNGB0LrQvtCz0L4g0YDQsNC50L7QvdCwINCz0L7RgNC-0LTQsCDQpdCw0YDRjNC60L7QstCw!5e0!3m2!1sru!2sua!4v1524224259084"
                    width="100%" height="50%" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
</div>


