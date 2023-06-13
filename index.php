<?php
require 'vendor/autoload.php';

isset($_GET['p']) ? $path = $_GET['p'] : $path = null;

switch ($path) {
    case null:
        $controller = new \Hetic\ReshomeH\Controller\AnnounceController();
        $controller->index('Annonces');
        break;

    case 'show':
        $controller = new \Hetic\ReshomeH\Controller\AnnounceController();
        $controller->index('Annonces');
        break;
}