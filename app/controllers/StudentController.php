<?php
namespace App\Core;

class StudentController
{

    public function index()
    {
        echo '<h1>Halaman Daftar Siswa</h1>';
        echo '<p>Menampilkan daftar seluruh siswa.</p>';
    }

    public function show($id)
    {
        echo '<h1>Detail Siswa</h1>';
        echo '<p>Menampilkan detail siswa dengan ID: ' . $id . '</p>';
    }

}