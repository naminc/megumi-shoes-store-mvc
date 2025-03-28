<?php

class HomeController extends Controller {
    public function index() {
        if (!isset($_SESSION['user'])) {
            $this->view('home', ['message' => 'Chào mừng bạn đến với trang chủ!']);
        } else {
            $this->view('home', ['message' => 'Chào mừng bạn, ' . $_SESSION['user']['fullname'] . '!']);
        }
    }
}
