<?php

namespace Hetic\ReshomeH\Controller;

use Hetic\ReshomeH\Utils\Utils;
use http\Exception\RuntimeException;

abstract class AbstractController
{
    protected array $params;
    protected string $viewDir;
    protected string $templateDir;
    protected string $imagesDir;


    public function __construct()
    {
        $this->viewDir = dirname(__DIR__, 1) . '/View/';
        $this->templateDir = $this->viewDir . '/Template/';
        $this->imagesDir = dirname(__DIR__, 2) . '/public/Images/';
    }
}