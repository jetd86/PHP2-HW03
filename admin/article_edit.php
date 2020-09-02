<?php
require_once __DIR__ . '/../autoload.php';
$view = new App\View\View();
$view->article = App\Models\Article::findById($_GET['id']);


if(isset($_GET['article_edit']) && isset($_POST['title'], $_POST['contents'])){
    $article = \App\Models\Article::findById($_GET['id']);
    $article->title = $_POST['title'];
    $article->contents= $_POST['contents'];
    $article->save();
    header('Location: /admin/');
    exit;
}


//$view->assign('article', $article);
$view->display(__DIR__ . '/../templates/header_html.php');
$view->display(__DIR__ . '/../templates/article_edit_html.php');
$view->display(__DIR__ . '/../templates/footer_html.php');

