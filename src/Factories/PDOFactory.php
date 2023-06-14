<?php

namespace Hetic\ReshomeH\Factories;
class PDOFactory
{
    private static string $dsn = 'mysql:dbname=reshomedata;host=127.0.0.1';
    private static string $username = 'root';
    private static string $password = "root";

    private static function getMysqlConnection(): \PDO
    {
        try {
            $db = new \PDO(self::$dsn, self::$username, self::$password);
            $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        } catch (\PDOException $exception) {
            ob_start();
            ?>
            <p><?= $exception->getMessage(); ?></p>
            <?php
            echo ob_get_clean();
        }
        return $db;
    }
    public function getConnection(): \PDO
    {
        return self::getMysqlConnection();
    }
}

