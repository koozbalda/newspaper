


<head>
    <link rel="stylesheet" href="/views/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/views/bootstrap/css/bootstrap-theme.css">
<!--    <link rel="stylesheet" href="/bootstrap/css/bootstrap-theme.css">-->

<!--    <title>-->
<!--        --><?//=!empty($_GET['title'])?$_GET['title']:'NEWSPAPER'?>
<!--    </title>-->
    <!---->
    <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">-->
    <!--        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">-->
    <!--        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>-->
</head>


<div role='navigation' style="padding-bottom:60px ">
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a style="font-family:Gulim" class="navbar-brand" href="/">NEWSPAPER</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!--                <ul class="nav navbar-nav">-->
                <!--                    <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>-->
                <!--                    <li><a href="#">Link</a></li>-->
                <!--                    <li class="dropdown">-->
                <!--                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"-->
                <!--                           aria-expanded="false">Dropdown <span class="caret"></span></a>-->
                <!--                        <ul class="dropdown-menu">-->
                <!--                            <li><a href="/">Action</a></li>-->
                <!--                            <li><a href="/">Another action</a></li>-->
                <!--                            <li><a href="#">Something else here</a></li>-->
                <!--                            <li role="separator" class="divider"></li>-->
                <!--                            <li><a href="#">Separated link</a></li>-->
                <!--                            <li role="separator" class="divider"></li>-->
                <!--                            <li><a href="#">One more separated link</a></li>-->
                <!--                        </ul>-->
                <!--                    </li>-->
                <!--                </ul>-->
                <!--                <form class="navbar-form navbar-left">-->
                <!--                    <div class="form-group">-->
                <!--                        <input type="text" class="form-control" placeholder="Search">-->
                <!--                    </div>-->
                <!--                    <button type="submit" class="btn btn-default">Submit</button>-->
                <!--                </form>-->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?=mylink('home')?>">Последние новости</a></li>

                    <li class="dropdown">
                        <a href="\?category=all" class="dropdown-toggle" data-toggle="dropdown" role="button"
                           aria-haspopup="true"
                           aria-expanded="false">Категории новостей<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <?php
                            $category = !empty($_GET['category_id']) ? $_GET['category_id'] : '0';
                            foreach ($data['category'] as $key => $value) {
                                if ($key == $category) {

                                    echo "<li class='active'><a href=". mylink('category',$key).">{$value}</a></li>";
                                } else {
                                    echo "<li><a href=". mylink('category',$key).">{$value}</a></li>";
                                }
                            }
                            ?>

                        </ul>
                    </li>
                    <li><a href="<?=mylink('information')?>">Контакты</a></li>
                    <!--                    <li>-->
                    <!--                        <form class="navbar-form navbar-right" role="form">-->
                    <!--                            <div class="form-group">-->
                    <!--                                <input placeholder="Email" class="form-control" type="text">-->
                    <!--                            </div>-->
                    <!--                            <div class="form-group">-->
                    <!--                                <input placeholder="Password" class="form-control" type="password">-->
                    <!--                            </div>-->
                    <!--                            <button type="submit" class="btn btn-success">Sign in</button>-->
                    <!--                        </form>-->
                    <!--                    </li>-->
                </ul>

            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>
<?//=var_dump($_SERVER['PHP_SELF']);?>
<?=var_dump($connect);?>

<br>
<?=is_null($connect);?>
<br>
<?=isset($connect);?>
<br>
<?=empty($connect);?>

<br>
<?php

$myvar = NULL;
var_dump( isset($myvar));
echo '<br>';// возвращает FALSE
$myvar = 0;
var_dump(isset($myvar));
echo '<br>'; // возвращает TRUE
$myvar = FALSE;
var_dump(isset($myvar));
echo '<br>'; // возвращает TRUE
$myvar = '';
var_dump( isset($myvar));
echo '<br>'; // возвращает TRUE
var_dump( isset($some_undefined_var));
echo    '<br>'; // возвращает FALSE
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="/views/bootstrap/js/bootstrap.js"></script>