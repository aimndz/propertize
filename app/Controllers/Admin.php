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
            ->groupStart()
            ->where('role', 'admin')
            ->orWhere('role', 'master admin')
            ->groupEnd()
            ->first();

        if ($user && password_verify($password, $user['password'])) {
            $session = session();
            $session->set('admin_id', $user['id']);
            $session->set('admin_first_name', $user['first_name']);
            $session->set('admin_last_name', $user['last_name']);
            $session->set('admin_username', $user['username']);
            $session->set('admin_email', $user['email']);
            $session->set('admin_role', $user['role']);

            return redirect()->to('/admin/overview');
        } else {
            return redirect()->back()->with('error', 'Invalid username or password');
        }
    }
}
