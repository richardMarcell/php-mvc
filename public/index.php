<?php

use App\Core\Router;
require_once './app/core/Router.php';

$router = new Router();

$router->add('GET', '/students', 'StudentController', 'index');
$router->add('GET', '/students/create', 'StudentController', 'create');
$router->add('GET', '/students/{id}', 'StudentController', 'show');

$router->run();

?>