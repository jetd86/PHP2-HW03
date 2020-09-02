<?php
require_once __DIR__ . '/../autoload.php';

$view = new App\View\View();

$view->articles = \App\Models\Article::findAll();

//$view->assign('news',$news);
$view->display(__DIR__ . '/../templates/header_html.php');
$view->display(__DIR__ . '/../templates/admin_html.php');
$view->display(__DIR__ . '/../templates/footer_html.php');
