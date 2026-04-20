<?php
namespace App\Models;
require_once '../app/core/Database.php';

use App\Core\Database;

class Student extends Database
{
    protected $table = 'students';

    // Fungsi Untuk Menampilkan Daftar Siswa
    public function getStudents()
    {
        $students = [];

        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }

        return $students;
    }

    // Fungsi Untuk Menampilkan Detail Siswa
    public function getStudent(int $id)
    {
        $query = "SELECT * FROM {$this->table} WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $result = $stmt->get_result();

        $student = $result->fetch_assoc();

        return $student;
    }

    public function insert(array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "INSERT INTO {$this->table} (name, nis, class, phone_number) VALUES (?,?,?,?)";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ssss', $name, $nis, $class, $phoneNumber);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /students');
            exit();
        } else {
            echo 'Error to store students';
        }
    }

    public function update(array $data, int $id)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "UPDATE {$this->table} set name = ?, nis = ?, class = ?, phone_number = ? WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ssssi', $name, $nis, $class, $phoneNumber, $id);
        $isExecute = $stmt->execute();

        if ($stmt->affected_rows > 0 || $isExecute) {
            header('Location: /students');
            exit();
        } else {
            echo 'Error to update students';
        }
    }

    public function delete(int $id)
    {
        $query = "DELETE FROM {$this->table} WHERE id = ?";

        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            header('Location: /students');
            exit();
        } else {
            echo "Error to delete students";
        }
    }

}

?>