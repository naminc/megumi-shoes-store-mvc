<?php

class AuthMiddleware {

    /**
     * Chuyển hướng nếu người dùng đã đăng nhập
     * Dùng cho các trang như /auth/login, /auth/register
     */
    public static function redirectIfLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (isset($_SESSION['user'])) {
            header("Location: /home");
            exit;
        }
    }

    /**
     * Yêu cầu người dùng phải đăng nhập
     * Dùng cho các trang bảo vệ như /home
     */
    public static function requireLogin() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: /auth/login");
            exit;
        }
    }
}