<?php

namespace Hetic\ReshomeH\Router;

class Router
{
    public function getController(): void
    {
        $jsonfile = file_get_contents('src/router/router.xml');
        var_dump($jsonfile);
        $json = json_decode($jsonfile, true);
        var_dump(json_decode($json));
    }
}