<?php

class AuthMiddleware {

    public static function redirectIfLoggedIn() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (isset($_SESSION['user'])) {
            header("Location: /home");
            exit;
        }
    }

    public static function requireLogin() {
        if (session_status() === PHP_SESSION_NONE) session_start();
        if (!isset($_SESSION['user'])) {
            header("Location: /auth/login");
            exit;
        }
    }
}