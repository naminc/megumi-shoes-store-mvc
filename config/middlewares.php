<?php
// config/middlewares.php
return [
    'auth/login' => ['AuthMiddleware::redirectIfLoggedIn'],
    'auth/register' => ['AuthMiddleware::redirectIfLoggedIn'],
    'home/index' => ['AuthMiddleware::requireLogin'],
];
