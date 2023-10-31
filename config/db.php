<?php

$pathToConfig = __DIR__ . '/db.config';
if (!file_exists($pathToConfig)) {
    die("Конфигурационный файл не найден.");
} else {
    return $databaseConfig = parse_ini_file($pathToConfig);
}
