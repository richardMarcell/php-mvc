<?php
namespace App\Core;

class Router
{

    private array $routes = [];

    public function add(string $method, string $path, string $controller, string $function)
    {
        $this->routes[] = [
            'method' => $method,
            'path' => $path,
            'controller' => $controller,
            'function' => $function
        ];
    }

    private function buildPattern(string $path)
    {
        $pattern = str_replace(
            '{id}',
            '([0-9]+)',
            $path
        );

        return '#^' . $pattern . '$#';
    }

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            $pattern = $this->buildPattern($route['path']);

            if (preg_match($pattern, $uri, $matches)) {
                require_once './app/controllers/' . $route['controller'] . '.php';

                $controllerClass = "App\\Controllers\\" . $route['controller'];
                $controller = new $controllerClass();

                $function = $route['function'];

                call_user_func_array([$controller, $function], $matches);

                return;
            }
        }

        http_response_code(404);
        echo 'Page Not Found';


    }

}
