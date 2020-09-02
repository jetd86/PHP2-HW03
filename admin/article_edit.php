<?php
require_once __DIR__ . '/../autoload.php';


$view = new App\View\View();

$view->article = App\Models\Article::findById($_GET['id']);

//$view->assign('article', $article);
$view->display(__DIR__ . '/../templates/header_html.php');
$view->display(__DIR__ . '/../templates/article_edit_html.php');
$view->display(__DIR__ . '/../templates/footer_html.php');

