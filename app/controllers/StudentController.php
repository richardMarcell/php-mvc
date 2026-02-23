<?php
namespace App\Controllers;

use App\Core\Controller;

require_once '../app/core/Controller.php';

class StudentController extends Controller
{

    public function index()
    {
        $this->view('students.index', [
            'testing' => 'testing'
        ]);
    }

    public function create()
    {
        require_once '../app/views/students/create.php';
    }

    public function show(string $id)
    {
        require_once '../app/views/students/show.php';
    }

    public function edit(string $id)
    {
        require_once '../app/views/students/edit.php';
    }

}