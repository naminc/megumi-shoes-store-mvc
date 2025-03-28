<?php

class User extends Model {
    public function checkFullname($fullname) { // Thay checkUsername thành checkFullname
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE fullname = ?"); // Thay username thành fullname
        $stmt->bind_param("s", $fullname);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result->num_rows > 0;
    }
    
    public function checkEmail($email) {
        $stmt = $this->conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $stmt->close();
        return $result->num_rows > 0;
    }
    
    public function register($email, $fullname, $password) { // Thay username thành fullname
        $stmt = $this->conn->prepare("INSERT INTO users (email, fullname, password) VALUES (?, ?, ?)"); // Thay username thành fullname
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt->bind_param("sss", $email, $fullname, $hash);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
    
    public function login($email, $password) {
        $stmt = $this->conn->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
    
        if ($result->num_rows === 0) {
            $stmt->close();
            return null;
        }
    
        $user = $result->fetch_assoc();
        $stmt->close();
    
        if (!password_verify($password, $user['password'])) {
            return false;
        }
    
        return $user;
    }
    
    public function getAllUsers() {
        $stmt = $this->conn->prepare("SELECT id, fullname, email, created_at FROM users ORDER BY id ASC"); // Thay username thành fullname
        $stmt->execute();
        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $users;
    }
    
    public function deleteById($id) {
        $stmt = $this->conn->prepare("DELETE FROM users WHERE id = ?");
        $stmt->bind_param("i", $id);
        $result = $stmt->execute();
        $stmt->close();
        return $result;
    }
}