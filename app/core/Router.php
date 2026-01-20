<?php
namespace App\Core;

class Router
{
    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        $uri = rtrim($uri, '/');

        if ($method === 'GET' && $uri === '') {
            require_once '../app/controllers/StudentController.php';
            $controller = new StudentController();
            $controller->index();
            return;
        }

        if ($method === 'GET' && preg_match('/^\/students\/(\d+)$/', $uri, $matches)) {
            require_once '../app/controllers/StudentController.php';
            $controller = new StudentController();
            $controller->show($matches[1]);
            return;
        }

        http_response_code(404);
        echo "Not Found Page";

    }
}
