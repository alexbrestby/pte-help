    <?php
    error_reporting(E_ALL);

    session_start();

    define('ROOT', dirname(__FILE__));
    require_once ROOT . '/app/components/Autoload.php';
    require_once ROOT . '/vendor/autoload.php';

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
    $dotenv->load();

    $router = new Router();
    $router->run();


    function debug($param)
    {
        echo "<pre>";
        var_dump($param);
        echo "</pre>";
    }
