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

    public function run()
    {
        $method = $_SERVER['REQUEST_METHOD'];
        $uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

        foreach ($this->routes as $route) {
            if ($method == $route['method'] && $uri == $route['path']) {
                require_once './app/controllers/' . $route['controller'] . '.php';
                $function = $route['function'];

                $controllerClass = 'App\\Controllers\\' . $route['controller'];
                $controller = new $controllerClass();

                $controller->$function();
                return;
            }
        }

        http_response_code(404);
        echo "Not Found Page";

    }
}
