<?php

namespace Hetic\ReshomeH\Router;

use Hetic\ReshomeH\Controller\ErrorController;
class Router
{
    public function getController(): object
    {
        $xml = new \DOMDocument();
        $xml->load(dirname(__DIR__, 1) . '/Router/routes.xml');
        $routes = $xml->getElementsByTagName('route');

        isset($_GET['p']) ? $path = htmlspecialchars($_GET['p']) : $path = "";

        foreach ($routes as $route) {
            if ($path === $route->getAttribute('p')) {
                $controllerClass = 'Hetic\ReshomeH\Controller\\' . $route->getAttribute('controller');
                $action = $route->getAttribute('action');
                $params = [];
                if ($route->hasAttribute('params')) {
                    $keys = explode(',', $route->getAttribute('params'));
                    foreach ($keys as $key) {
                        $params['key'] = $_GET[$key];
                    }
                }
                return new $controllerClass($action, $params);
            }
        }

        return new ErrorController(404, 'noRoute');
    }
}