<?php
namespace App\Models;
require '../app/core/database.php';

use App\Core\Database;

class Student extends Database
{
    protected $table = 'students';

    public function getStudents()
    {
        $students = [];

        $query = "SELECT * from {$this->table}";
        $stmt = $this->connection->prepare($query);
        $stmt->execute();

        $result = $stmt->get_result();

        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }

        return $students;
    }

    public function getStudent(int $id)
    {
        $query = "SELECT * from {$this->table} where id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('i', $id);
        $stmt->execute();

        $student = $stmt->get_result()->fetch_assoc();

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
            die('Error to store students: ' . $stmt->error);
        }
    }

    public function update(int $id, array $data)
    {
        $name = htmlspecialchars($data['name']);
        $nis = htmlspecialchars($data['nis']);
        $class = htmlspecialchars($data['class']);
        $phoneNumber = htmlspecialchars($data['phone_number']);

        $query = "UPDATE {$this->table} SET name = ?, nis = ?, class = ?, phone_number = ? where id = ?";
        $stmt = $this->connection->prepare($query);
        $stmt->bind_param('ssssi', $name, $nis, $class, $phoneNumber, $id);
        $isExecute = $stmt->execute();

        if ($stmt->affected_rows > 0 || $isExecute) {
            header('Location: /students');
            exit();
        } else {
            die('Error to update students: ' . $stmt->error);
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
            die('Error to delete user: ' . $stmt->error);
        }
    }
}
?>