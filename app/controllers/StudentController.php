<?php
namespace App\Controllers;

use App\Core\Controller;

require_once './app/core/Controller.php';

class StudentController extends Controller
{

    public function index()
    {
        $students = [
            ['name' => 'Andi', 'nis' => '12345', 'class' => '11 TKJ 1', 'phone_number' => '081234567890'],
            ['name' => 'Budi', 'nis' => '12346', 'class' => '11 TKJ 2', 'phone_number' => '081234567891'],
            ['name' => 'Nina', 'nis' => '12347', 'class' => '11 TKJ 3', 'phone_number' => '081234567892'],
            ['name' => 'Gina', 'nis' => '12348', 'class' => '11 TKJ 1', 'phone_number' => '081234567893'],
        ];

        $this->view('students.index', [
            'title' => 'Daftar Siswa',
            'students' => $students,
        ]);
    }

    public function create()
    {
        $this->view('students.create', [
            'title' => 'Tambah Siswa',
        ]);
    }

    public function show(string $id)
    {
        $this->view('students.show', [
            'title' => 'Detail Siswa',
        ]);
    }

}