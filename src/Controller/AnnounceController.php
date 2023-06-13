<?php

namespace Hetic\ReshomeH\Controller;

use Hetic\ReshomeH\Model\Class\Announce;
use Hetic\ReshomeH\Model\Manager\AnnounceManager;

class AnnounceController
{
    protected array $announces;

    public function __construct()
    {
        $manager = new AnnounceManager();
        $announces = $manager->getAllAnnounces();
        $this->render('Annonces', $announces);
    }

    public function render(string $title, array $announces) : mixed
    {
        $viewDir = dirname(__DIR__, 1) . '/View';
        $template = $viewDir . '/Templates/skeleton.php';
        $view = $viewDir . '/announce.php';

        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $template;
    }



}