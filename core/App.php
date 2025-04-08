<?php

require_once 'core/Request.php'; // Include class Request

class App {
    protected $controller = 'HomeController';
    protected $action = 'index';
    protected $params = [];
    protected $controllerName; // Lưu tên controller dưới dạng chuỗi
    protected $request; // Lưu đối tượng Request
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

        // Tạo đối tượng Request
        $this->request = new Request($this->controllerName, $this->action, $this->params);

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
        // Sử dụng $this->request->getRoute() để lấy route hiện tại
        $currentRoute = $this->request->getRoute();
    
        if (isset($middlewares[$currentRoute])) {
            foreach ($middlewares[$currentRoute] as $middleware) {
                list($class, $method) = explode('::', $middleware);
                require_once 'middleware/' . $class . '.php';
                // Truyền đối tượng Request vào middleware
                call_user_func([$class, $method], $this->request);
            }
        }
    }

    // Getter để truy cập Request từ bên ngoài (nếu cần)
    public function getRequest() {
        return $this->request;
    }
}