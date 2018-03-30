<?php
/**
 * Created by PhpStorm.
 * User: w11402
 * Date: 29.03.2018
 * Time: 13:52
 */
define('HOST', 'localhost');//константа
define('USER', 'root');//константа
define('PASSWORD', '');//константа
define('DATABASE', 'phploc');//константа

$connect = mysqli_connect(HOST, USER, PASSWORD, DATABASE);