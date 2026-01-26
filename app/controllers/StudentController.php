<?php
namespace App\Controllers;

class StudentController
{

    public function index()
    {
        echo '<h1>Halaman Daftar Siswa</h1>';
        echo '<p>Menampilkan daftar seluruh siswa.</p>';
    }

    public function create()
    {
        echo '<h1>Tambah Siswa</h1>';
        echo '<p>Menampilkan Form Tambah Siswa</p>';
    }

}