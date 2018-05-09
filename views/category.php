<?php
/**
 * Created by PhpStorm.
 * User: KooZ
 * Date: 02.04.2018
 * Time: 18:59
 */
if(!empty($_GET[$_GET['route'].'_id'])){
    $url=mylink($_GET['route'], $_GET[$_GET['route'].'_id']);
}else{
    $url=mylink($_GET['route']);

}
require_once "home.php"
?>

        <div>
            <ul class="pagination">
                <li class="prev">
                    <a href="<?=$url?>&page=1&amp;per-page=<?=$data['per_page']?>" data-page="1">
                        <span>first</span>
                    </a>
                </li>
                <li class="prev <?= ($data['page'] - 1) > 0 ? '1' : 'disabled' ?>">

                    <a href="<?=$url?>&page=<?= ($data['page']- 1) > 0 ? ($data['page'] - 1) : '1   ' ?>&amp;per-page=<?=$data['per_page']?>" data-page="<?= ($data['page'] - 1) > 0 ? ($data['page'] - 1) : '1' ?>">
                        <span>&laquo</span>
                    </a>

                </li>

                <?php

                for ($i = $data['page'] - 2; $i <= $data['page'] + 2; $i++) {
                    if ($i >= 1 && $i <= $data['last_page']) {
                        if ($i == $data['page']) {
                            echo '<li class="active">
                        <a href="'.$url.'&page=' . $i . '&amp;per-page=' . $data['per_page'] . '" data-page="' . $i . '">' . $i . '</a>
                      </li>';
                        } else {
                            echo '<li>
                        <a href="'.$url.'&page=' . $i . '&amp;per-page=' . $data['per_page'] . '" data-page="' . $i . '">' . $i . '</a>
                      </li>';
                        }
                    }
                }

                ?>
                <li class="next <?= ($data['page'] + 1) <= $data['last_page'] ? '' : 'disabled' ?>">
                    <a href="<?=$url?>&page=<?= ($data['page'] + 1) <= $data['last_page'] ? $data['page'] + 1 : $data['last_page'] ?>&amp;per-page=<?=$data['per_page']?>"
                       data-page="1">
                        &raquo
                    </a>
                </li>
                <li class="next">
                    <a href="<?=$url?>&page=<?= !empty($data['last_page']) ? $data['last_page'] : 1 ?>&amp;per-page=<?=$data['per_page']?>"
                       data-page="9">
                        last
                    </a>
                </li>
            </ul>
        </div>