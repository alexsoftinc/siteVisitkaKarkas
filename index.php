<?php
// Опредиление явно css директории как и для картинок это указано ниже
define('CSS_PATH', 'http://azs-59.ru/template/default_layout/css'); 
define('IMAGE_PATH', 'http://azs-59.ru/template/default_layout/images');
// вот так работает news/eng/view/some-alias
include_once 'core/libs/Routing.php';
include_once 'core/libs/Controller.php';
include_once 'core/libs/View.php';
// Инициализация самого роутинка 
$route = new Routing();
