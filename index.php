<?php
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 29.03.2018
 * Time: 13:49
 */
require_once ("header.php");



foreach (getLastTenNews($connect) as $value){
   print showOneNews($value);

}
require_once ("footer.php");

