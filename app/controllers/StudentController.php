<?php
namespace App\Controllers;
require_once '../app/core/Controller.php';
require_once '../app/models/Student.php';

use App\Core\Controller;
use App\Models\Student;

class StudentController extends Controller
{

    public function index()
    {
        $models = new Student();
        $students = $models->getStudents();

        $this->view('students.index', [
            'title' => 'Daftar Siswa',
            'students' => $students
        ]);
    }

    public function create()
    {
        $this->view('students.create', [
            'title' => 'Tambah Siswa'
        ]);
    }

    public function show(string $id)
    {
        $id = intval($id);
        $models = new Student();
        $student = $models->getStudent($id);

        $this->view('students.show', [
            'title' => 'Detail Siswa',
            'student' => $student
        ]);
    }

    public function edit(string $id)
    {
        $id = intval($id);
        $models = new Student();
        $student = $models->getStudent($id);

        $this->view('students.edit', [
            'title' => 'Edit Siswa',
            'student' => $student
        ]);
    }

    public function store()
    {
        $data = $_POST;
        $models = new Student();
        $models->insert($data);
    }

    public function update(string $id)
    {
        $id = intval($id);
        $data = $_POST;
        $models = new Student();
        $models->update($id, $data);
    }

    public function destroy(string $id)
    {
        $id = intval($id);
        $models = new Student();
        $models->delete($id);
    }

}