<?php

namespace App\Controllers;

use CodeIgniter\Shield\Models\UserModel;
use CodeIgniter\Shield\Entities\User;
use CodeIgniter\Shield\Authentication\Authenticators\SessionAuthenticator;
use App\Models\UsersModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('Home/index');
    }

    public function create()
    {
        $model = new UsersModel;
        $userData = $this->request->getPost(['first_name', 'last_name', 'username', 'password', 'email', 'role']);
        $userData['password'] = password_hash($userData['password'], PASSWORD_DEFAULT);
        $model->insert($userData);

        return redirect()->to('/');
    }

    public function login()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $userModel = new \App\Models\UsersModel();

        $user = $userModel->where('username', $username)->first();

        if ($user) {
            if (password_verify($password, $user['password'])) {
                $session = session();
                $session->set('user_id', $user['id']);
                $session->set('user_first_name', $user['first_name']);
                $session->set('user_last_name', $user['last_name']);
                $session->set('user_username', $user['username']);
                $session->set('user_email', $user['email']);

                return redirect()->to('/');
            }
        }

        return redirect()->back()->with('error', 'Invalid username or password');
    }

    public function logout()
    {
        $session = session();
        $session->remove('user_id');
        $session->remove('user_first_name');
        $session->remove('user_last_name');
        $session->remove('user_username');
        $session->remove('user_email');
        $session->destroy();

        return redirect()->to('/');
    }
}
