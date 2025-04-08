<?php

require_once 'middleware/AuthMiddleware.php'; // Include middleware

class AuthController extends Controller {

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $errors = [];
            if (empty($email)) {
                $errors['email'] = 'Vui lòng nhập địa chỉ email!';
            }
            if (empty($password)) {
                $errors['password'] = 'Vui lòng nhập mật khẩu!';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ!';
            }
            if (strlen($password) < 6 || strlen($password) > 32) {
                $errors['password'] = 'Mật khẩu phải từ 6 đến 32 ký tự!';
            }
            if (empty($errors)) {
                $userModel = $this->model('User');
                $result = $userModel->login($email, $password);
                if (!$result) {
                    $login_error = 'Email hoặc mật khẩu không chính xác!';
                } else {
                    if (session_status() === PHP_SESSION_NONE) session_start();
                    $_SESSION['user'] = $result;
                    header("Location: /home");
                    exit;
                }
            }
    
            $this->view("auth/login", [
                'login_errors' => $errors,
                'login_error' => $login_error ?? null,
                'login_old' => ['email' => $email],
                'isLoggedIn' => isset($_SESSION['user'])
            ]);
            return;
        }
    
        if (session_status() === PHP_SESSION_NONE) session_start();
        $register_success = $_SESSION['register_success'] ?? null;
        unset($_SESSION['register_success']);
    
        $this->view("auth/login", [
            'register_success' => $register_success,
            'isLoggedIn' => isset($_SESSION['user'])
        ]);
    }

    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $fullname = trim($_POST['fullname']);
            $email = trim($_POST['email']);
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            $userModel = $this->model('User');
            $errors = [];
            if ($userModel->checkEmail($email)) {
                $errors['email'] = 'Email đã được sử dụng bởi tài khoản khác!';
            }
            if (strlen($password) < 6 || strlen($password) > 32) {
                $errors['password'] = 'Mật khẩu phải từ 6 đến 32 ký tự!';
            }
            if ($password !== $password_confirm) {
                $errors['password_confirm'] = 'Mật khẩu nhập lại không khớp!';
            }
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors['email'] = 'Email không hợp lệ!';
            }
            if (!empty($errors)) {
                $this->view("auth/login", [
                    'register_errors' => $errors,
                    'register_old' => ['fullname' => $fullname, 'email' => $email],
                    'isLoggedIn' => isset($_SESSION['user'])
                ]);
                return;
            }
            if ($userModel->register($email, $fullname, $password)) {
                if (session_status() === PHP_SESSION_NONE) session_start();
                $_SESSION['register_success'] = 'Đăng ký thành công! Vui lòng đăng nhập.';
                header("Location: /auth/login");
                exit;
            } else {
                $this->view("auth/login", [
                    'register_errors' => ['general' => 'Đăng ký thất bại!'],
                    'register_old' => ['fullname' => $fullname, 'email' => $email],
                    'isLoggedIn' => isset($_SESSION['user'])
                ]);
                return;
            }
        }

        $this->view("auth/login", [
            'isLoggedIn' => isset($_SESSION['user'])
        ]);
    }

    public function logout() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        session_destroy();
        header("Location: /auth/login");
        exit;
    }
}