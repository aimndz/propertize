<?php

namespace App\Controllers;

class Admin extends BaseController
{
    public function index(): string
    {
        return view('Admin/index');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UsersModel();

        $user = $userModel->where('username', $username)
            ->where('role', 'admin')
            ->first();

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $session->set('user_id', $user['id']);
            $session->set('role', $user['role']);

            return redirect()->to('/admin/overview');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
}
