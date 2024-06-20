<?php

namespace App\Controllers;

class List_property extends BaseController
{
    public function index(): string
    {
        return view('List_property/index');
    }

    public function list()
    {
        $model = new UsersModel;
        $userData = $this->request->getPost(['first_name', 'last_name', 'username', 'password', 'email', 'role']);
        $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);
        $model->insert($userData);

        return redirect()->to('/');
    }
}
