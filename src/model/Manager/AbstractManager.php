<?php

namespace Hetic\ReshomeH\model\Manager;

use Hetic\ReshomeH\factories\PDOFactory;

abstract class AbstractManager
{
    protected \PDO $db;
    public function __construct()
    {
        $this->db = PDOFactory::getConnection();
    }
}