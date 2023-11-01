<?php

class Database
{
    public static function getConnection()
    {
        try {
            $paramsPath = ROOT . '/config/db.php';
            $params = include($paramsPath);

            $dsn = "mysql:host={$params['DB_HOST']};dbname={$params['DB_DATABASE']}";
            $db = new PDO($dsn, $params['DB_USERNAME'], $params['DB_PASSWORD']);

            $db->exec("set names utf8");

            return $db;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            die();
        }
    }
}
