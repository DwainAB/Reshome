<?php

namespace Hetic\ReshomeH\controller;

use Hetic\ReshomeH\model\Manager\AnnounceManager;

class AnnounceController
{
    protected array $announces;

    public function __construct()
    {
        $manager = new AnnounceManager();
        $announces = $manager->getAllAnnounces();
        var_dump($announces);
    }


}