<?php

/**
 * Функция __autoload для автоматического подключения классов
 */
function my_autoloader($class_name)
{
    $array_paths = array(
        '/models/',
        '/components/',
        '/controllers/',
    );

    foreach ($array_paths as $path) {

        $path = ROOT . '/app' . $path . $class_name . '.php';

        if (is_file($path)) {
          // echo($path) . '<br>'; 
          include_once $path;
        }
    }
}

spl_autoload_register('my_autoloader');
