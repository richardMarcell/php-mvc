<?php
namespace App\Controllers;

class Controller
{

    public function view(string $view, array $data = [])
    {
        $view = str_replace(
            '.',
            '/',
            $view
        );

        extract($data);

        require_once "../app/views/{$view}.php";
    }

}

?>