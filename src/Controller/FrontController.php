<?php

namespace Hetic\ReshomeH\Controller;

use Hetic\ReshomeH\Model\Class\Announce;
use Hetic\ReshomeH\Model\Manager\AnnounceManager;

class FrontController extends AbstractController
{

    public function __construct()
    {
        parent::__construct();
    }

    public function executeIndex() : mixed
    {
        $manager = new AnnounceManager();
        $announces = $manager->getAllAnnounces();
        $title = 'Home';

        $template = $this->templateDir . 'skeleton.php';
        $view = $this->viewDir . 'announceBox.php';

        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $template;
    }

    public function executeDetail($id) : mixed
    {
        $manager = new AnnounceManager();
        $announce = $manager->getAnnounceById($id);

        $template = $this->templateDir . 'skeleton.php';
        $view = $this->viewDir . 'announceDetails.php';

        ob_start();
        require $view;
        $content = ob_get_clean();
        return require $template;
    }



}