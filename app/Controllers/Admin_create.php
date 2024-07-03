<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin_create extends BaseController
{
    public function index(): string
    {
        return view('Admin_create/index');
    }

    public function create()
    {
        $model = new UsersModel();

        // Get post data
        $userData = $this->request->getPost([
            'first_name', 'last_name', 'username', 'password', 'email', 'role'
        ]);

        // Hash password
        $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);

        // Check if username or email already exists
        if ($model->where('username', $userData['username'])->first() !== null) {
            return redirect()->to('/')->with('error', 'Username already exists.');
        }

        if ($model->where('email', $userData['email'])->first() !== null) {
            return redirect()->to('/')->with('error', 'Email already exists.');
        }

        // Insert user data if no duplicates found
        $model->insert($userData);

        return redirect()->to('/admin/overview');
    }
}
