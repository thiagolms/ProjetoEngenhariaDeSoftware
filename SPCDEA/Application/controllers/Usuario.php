<?php

namespace Application\controllers;

use Application\core\Controller;

class Usuario extends Controller
{
    public function index() {
        $Usuarios = $this->model('Usuario');
        $data = $Usuarios::findAll();
        $this->view('user/index', ['users' => $data]);
    }

    public function show($id = null) {
        if (is_numeric($id)) {
            $Usuarios = $this->model('Users');
            $data = $Usuarios::findById($id);
            $this->view('user/show', ['user' => $data]);
        } else {
            $this->pageNotFound();
        }
    }
}