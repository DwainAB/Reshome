<?php

namespace Hetic\ReshomeH\Controller;

use Hetic\ReshomeH\Model\Manager\AnnounceManager;

class AnnounceController
{
    protected array $announces;

    public function __construct()
    {
        $manager = new AnnounceManager();
        $announces = $manager->getAllAnnounces();
        ?>
<pre>
    <?= var_dump($announces);?>
</pre>
       <?php
    }


}