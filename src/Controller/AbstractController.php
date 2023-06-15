<?php

namespace Hetic\ReshomeH\Controller;

use http\Exception\RuntimeException;

abstract class AbstractController
{
    protected array $params;
    protected string $viewDir;
    protected string $templateDir;
    protected string $imagesDir;

    public function __construct()
    {
        session_start();

        $this->viewDir = dirname(__DIR__, 1) . '/View/';
        $this->templateDir = $this->viewDir . '/Template/';
        $this->imagesDir = dirname(__DIR__, 2) . '/public/Images/';
    }

    protected function requireLogin()
    {
        if (!isset($_SESSION['user_id']))
        {
            header('Location: ?action=login'); // À changer pour la page de connexion
            exit();
        }
    }
}
