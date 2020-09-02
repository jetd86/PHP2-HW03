<?php
require_once __DIR__ . '/../autoload.php';

if(isset($_GET['article_delete'])){
    $article = \App\Models\Article::findById($_GET['id']);
    $article->delete();
    header('Location: /admin/');
    exit;
}





