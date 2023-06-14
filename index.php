<?php
require 'vendor/autoload.php';

isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

switch ($path) {
    case null:
        $controller = new \Hetic\ReshomeH\Controller\FrontController();
        $controller->executeIndex();
        break;

    case 'show':
        if (isset($_GET['id']) && intval($_GET['id']) !== 0) {
            $controller = new \Hetic\ReshomeH\Controller\FrontController();
            $controller->executeDetail(htmlspecialchars($_GET['id']));
        } else {
            new \Hetic\ReshomeH\Controller\ErrorController(404, 'noId');
        }
        break;
}