<?php

$pathToConfig = __DIR__ . '/db.config';
if (!file_exists($pathToConfig)) {
    die("Конфигурационный файл не найден.");
}

$databaseConfig = parse_ini_file($pathToConfig);

debug($databaseConfig);
