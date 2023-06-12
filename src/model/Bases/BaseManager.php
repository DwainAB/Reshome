<?php

namespace Fano\Reshome\model\Bases;

use Hetic\ReshomeH\factories\PDOFactory;

abstract class BaseManager
{
    protected \PDO $db;
    public function __construct()
    {
        $this->db = PDOFactory::getConnection();
    }
}