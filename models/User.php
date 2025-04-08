<?php

class User extends Model {
    // Kiểm tra fullname đã tồn tại chưa
    public function checkFullname($fullname) {
        $stmt = $this->prepare("SELECT id FROM users WHERE fullname = ?", [$fullname]);
        $result = $stmt->get_result();
        $stmt->close();
        return $result->num_rows > 0;
    }
    
    // Kiểm tra email đã tồn tại chưa
    public function checkEmail($email) {
        $stmt = $this->prepare("SELECT id FROM users WHERE email = ?", [$email]);
        $result = $stmt->get_result();
        $stmt->close();
        return $result->num_rows > 0;
    }
    
    // Đăng ký người dùng mới
    public function register($email, $fullname, $password) {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->prepare("INSERT INTO users (email, fullname, password) VALUES (?, ?, ?)", [$email, $fullname, $hash]);
        $affectedRows = $stmt->affected_rows; // Kiểm tra số hàng bị ảnh hưởng
        $stmt->close();
        return $affectedRows > 0; // Trả về true nếu thêm thành công
    }
    // Đăng nhập
    public function login($email, $password) {
        $stmt = $this->prepare("SELECT * FROM users WHERE email = ?", [$email]);
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
    
    // Lấy danh sách tất cả người dùng
    public function getAllUsers() {
        $stmt = $this->prepare("SELECT id, fullname, email, created_at FROM users ORDER BY id ASC", []);
        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $users;
    }
    
    // Xóa người dùng theo ID
    public function deleteById($id) {
        $stmt = $this->prepare("DELETE FROM users WHERE id = ?", [$id]);
        $affectedRows = $stmt->affected_rows; // Kiểm tra số hàng bị xóa
        $stmt->close();
        return $affectedRows > 0; // Trả về true nếu xóa thành công
    }
}