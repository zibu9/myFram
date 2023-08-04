<?php

use Router\Router;
use App\Exceptions\NotFoundException;

require '../vendor/autoload.php';

define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . '/');
define('DB_NAME', 'tpbdd');
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PWD', '');


$routeur = new Router($_GET['url']);
$routeur->get('/', 'App\COntrollers\BlogController@index');
$routeur->get('/posts/:id', 'App\Controllers\BlogController@show');
try {
    $routeur->run();
} catch (NotFoundException $e) {
    return $e->_404();
}