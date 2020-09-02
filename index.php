<?php
require_once  __DIR__ . '/autoload.php';
$view = new App\View\View();

$view->articles = App\Models\Article::getLimitRows(3);




$view->display(__DIR__ . '/templates/header_html.php');
$view->display(__DIR__ . '/templates/news_html.php');
$view->display(__DIR__ . '/templates/footer_html.php');


