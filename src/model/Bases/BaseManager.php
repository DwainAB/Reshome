<?php

namespace Hetic\ReshomeH\model\Bases;

use Hetic\ReshomeH\factories\PDOFactory;

abstract class BaseManager
{
    protected \PDO $db;
    public function __construct()
    {
        $this->db = (new \Hetic\ReshomeH\factories\PDOFactory)->getConnection();
    }
}