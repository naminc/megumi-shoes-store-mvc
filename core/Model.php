<?php
require_once 'config/database.php';

class Model {
    protected $conn;

    public function __construct() {
        $this->conn = new mysqli(LOCALHOST, USERNAME, PASSWORD, DB_NAME);
        mysqli_set_charset($this->conn, 'utf8');
        if ($this->conn->connect_error) {
            die("Kết nối thất bại: " . $this->conn->connect_error);
        }
    }

    // Thực thi truy vấn SQL chung
    public function query($sql) {
        $result = $this->conn->query($sql);
        if ($result === false) {
            die("Lỗi truy vấn: " . $this->conn->error);
        }
        return $result;
    }

    // Lấy tất cả bản ghi
    public function fetchAll($sql) {
        $result = $this->query($sql);
        $data = [];
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
        }
        return $data;
    }

    // Lấy một bản ghi
    public function fetchOne($sql) {
        $result = $this->query($sql);
        return $result->fetch_assoc();
    }

    // Thêm dữ liệu
    public function insert($table, $data) {
        $columns = implode(", ", array_keys($data));
        $values = "'" . implode("', '", array_values($data)) . "'";
        $sql = "INSERT INTO $table ($columns) VALUES ($values)";
        $this->query($sql);
        return $this->getLastId(); // Trả về ID vừa chèn
    }

    // Cập nhật dữ liệu
    public function update($table, $data, $where) {
        $set = [];
        foreach ($data as $key => $value) {
            $set[] = "$key = '$value'";
        }
        $set = implode(", ", $set);
        $sql = "UPDATE $table SET $set WHERE $where";
        return $this->query($sql);
    }
    // Xóa dữ liệu
    public function delete($table, $where) {
        $sql = "DELETE FROM $table WHERE $where";
        return $this->query($sql);
    }
    
    // Ngăn chặn SQL Injection
    public function escape($value) {
        return $this->conn->real_escape_string($value);
    }

    // Sử dụng Prepared Statements
    public function prepare($sql, $params) {
        $stmt = $this->conn->prepare($sql);
        if ($stmt === false) {
            die("Lỗi prepare: " . $this->conn->error);
        }
        $types = str_repeat('s', count($params)); // Mặc định tất cả là string
        $stmt->bind_param($types, ...$params);
        $stmt->execute();
        return $stmt;
    }
    // Lấy ID vừa chèn
    public function getLastId() {
        return $this->conn->insert_id;
    }
    // Đếm số hàng bị ảnh hưởng
    public function rowCount($sql) {
        $result = $this->query($sql);
        return $result->num_rows;
    }
    // Đóng kết nối
    public function close() {
        $this->conn->close();
    }
    // Hủy đối tượng (tự động đóng kết nối khi đối tượng bị hủy)
    public function __destruct() {
        $this->close();
    }
}