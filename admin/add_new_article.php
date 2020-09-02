<?php
require_once __DIR__ . '/../autoload.php';

$view = new App\View\View();

$view->display(__DIR__ . '/../templates/header_html.php');
$view->display(__DIR__ . '/../templates/add_new_article_html.php');
$view->display(__DIR__ . '/../templates/footer_html.php');