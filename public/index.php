<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../config/db.php';
require_once __DIR__ . '/../app/Models/Database.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/..');
$dotenv->load();

$db = new Database(
    $databaseConfig['DB_HOST'],
    $databaseConfig['DB_USERNAME'],
    $databaseConfig['DB_PASSWORD'],
    $databaseConfig['DB_DATABASE']
);


try {
    $query = $db->query('SELECT * FROM users LIMIT 5');
    $result = $query->fetchAll(PDO::FETCH_ASSOC);

    foreach ($result as $row) {
        echo 'User ID: ' . $row['unique_id'] . ' - ';
        echo 'Email: ' . $row['mail'] . '<br>';
    }
} catch (PDOException $e) {
    // Обработка ошибки
    echo "Ошибка при выполнении запроса: " . $e->getMessage();
}

function debug($param)
{
    echo "<pre>";
    var_dump($param);
    echo "</pre>";
}
