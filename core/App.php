<?php

class App {
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];
    protected $controllerName; // Thêm biến để lưu tên controller dưới dạng chuỗi

    public function __construct() {
        $url = $this->parseUrl();

        // Controller
        if (!empty($url[0])) {
            $controllerName = ucfirst($url[0]) . 'Controller';
            $controllerFile = 'controllers/' . $controllerName . '.php';
        
            if (file_exists($controllerFile)) {
                $this->controller = $controllerName;
                $this->controllerName = $controllerName; // Lưu tên controller dưới dạng chuỗi
                unset($url[0]);
            } else {
                $this->loadError();
                return;
            }
        } else {
            $this->controllerName = $this->controller; // Lưu tên controller mặc định
        }        
        require_once 'controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // Action (method)
        if (!empty($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->action = $url[1];
                unset($url[1]);
            } else {
                $this->loadError();
                return;
            }
        }

        // Params
        $this->params = array_values($url);

        // Áp dụng middleware trước khi gọi controller::action
        $this->applyMiddleware();

        // Gọi hàm controller::action với tham số
        call_user_func_array([$this->controller, $this->action], $this->params);
    }

    public function parseUrl() {
        if (isset($_GET['url'])) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
        return [];
    }

    private function loadError() {
        require_once 'controllers/ErrorController.php';
        $error = new ErrorController();
        $error->notFound();
    }

    protected function applyMiddleware() {
        $middlewares = require_once 'config/middlewares.php';
        // Sử dụng $this->controllerName thay vì $this->controller
        $currentRoute = strtolower(str_replace('Controller', '', $this->controllerName)) . '/' . $this->action;
    
        if (isset($middlewares[$currentRoute])) {
            foreach ($middlewares[$currentRoute] as $middleware) {
                list($class, $method) = explode('::', $middleware);
                require_once 'middleware/' . $class . '.php';
                call_user_func([$class, $method]);
            }
        }
    }
}