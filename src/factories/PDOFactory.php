<?php

namespace Hetic\ReshomeH\factories;
class PDOFactory
{
    private static string $dsn = 'mysql:host=db';
    private static string $username = '';
    private static string $password = '';

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

