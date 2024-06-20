<?php

namespace App\Controllers;

use CodeIgniter\Shield\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // $validation = \Config\Services::validation();

        // if (!$validation->run($this->request->getPost(), 'login')) {
        //     return $this->response->setJSON(['success' => false, 'message' => $validation->getErrors()]);
        // }

        $users = new UserModel();

        $credentials = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password')
        ];

        $user = $users->findByCredentials($credentials);

        dd($user);

        // if ($user && $user->hasPassword()) {
        //     auth()->login($user);
        //     return $this->response->setJSON(['success' => true, 'redirect' => base_url('/dashboard')]);
        // } else {
        //     return $this->response->setJSON(['success' => false, 'message' => lang('Auth.badAttempt')]);
        // }
    }
}
