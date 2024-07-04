<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PaymentTrackingModel;

class Home extends BaseController
{
    public function index(): string
    {

        // $paymentTrackingModel = new PaymentTrackingModel();
        // $paymentTrackingModel->truncate();
        // $paymentTrackingModel->query('ALTER TABLE payment_tracking AUTO_INCREMENT = 1');

        return view('Home/index');
    }

    public function create()
    {
        $model = new UsersModel();

        // Get post data
        $userData = $this->request->getPost([
            'first_name', 'last_name', 'username', 'password', 'confirm_password', 'email', 'role'
        ]);

        // Check if password and confirm password match
        if ($userData['password'] !== $userData['confirm_password']) {
            return $this->response->setJSON(['success' => false, 'message' => 'Confirm password does not match']);
        }

        // Hash password
        $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);

        // Remove confirm_password from user data
        unset($userData['confirm_password']);

        // Check if username or email already exists
        if ($model->where('username', $userData['username'])->first() !== null) {
            return $this->response->setJSON(['success' => false, 'message' => 'Username already exists']);
        }

        if ($model->where('email', $userData['email'])->first() !== null) {
            return $this->response->setJSON(['success' => false, 'message' => 'Email already exists']);
        }

        // Insert user data if no duplicates found
        $model->insert($userData);

        return $this->response->setJSON(['success' => true, 'redirect' => '/']);
    }



    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UsersModel();

        $user = $userModel->where('username', $username)->first();

        // Check if user exists and role is not 'admin'
        if ($user && $user['role'] !== 'admin') {
            if (password_verify($password, $user['password'])) {
                $session = session();
                $session->set('user_id', $user['id']);
                $session->set('user_first_name', $user['first_name']);
                $session->set('user_last_name', $user['last_name']);
                $session->set('user_username', $user['username']);
                $session->set('user_email', $user['email']);
                $session->set('user_role', $user['role']);

                return $this->response->setJSON(['success' => true, 'redirect' => '/']);
            }
        }

        return $this->response->setJSON(['success' => false, 'message' => 'Invalid username or password']);
    }


    public function logout()
    {
        $session = session();
        $session->remove('user_id');
        $session->remove('user_first_name');
        $session->remove('user_last_name');
        $session->remove('user_username');
        $session->remove('user_email');
        $session->remove('user_role');
        $session->destroy();

        return redirect()->to('/');
    }
}
