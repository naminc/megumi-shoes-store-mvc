<?php

class Request {
    public $controller;
    public $action;
    public $params;

    public function __construct($controller, $action, $params) {
        $this->controller = $controller;
        $this->action = $action;
        $this->params = $params;
    }

    public function getRoute() {
        return strtolower(str_replace('Controller', '', $this->controller)) . '/' . $this->action;
    }
}