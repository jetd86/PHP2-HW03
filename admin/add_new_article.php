<?php
require_once __DIR__ . '/../autoload.php';

$view = new App\View\View();

if(isset($_GET['add_new_article']) && isset($_POST['title'], $_POST['contents'])){
    $art = new App\Models\Article();
    $art->title = $_POST['title'];
    $art->contents= $_POST['contents'];
    $art->save();
    header('Location: /admin/');
    exit;
}


$view->display(__DIR__ . '/../templates/header_html.php');
$view->display(__DIR__ . '/../templates/add_new_article_html.php');
$view->display(__DIR__ . '/../templates/footer_html.php');