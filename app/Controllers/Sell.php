<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\PropertiesImagesModel;

class Sell extends BaseController
{
    public function index(): string
    {
        $session = session();
        $userRole = $session->get('user_role');


        // Checks if the user already a seller
        $data = [
            'showSellerModal' => !str_contains($userRole, 'seller')
        ];

        return view('Sell/index', $data);
    }

    public function update_role()
    {
        $session = session();
        $userId = $session->get('user_id');

        $usersModel = new UsersModel();
        $user = $usersModel->find($userId);

        $currentRoles = $user['role'];

        if (!str_contains($currentRoles, 'seller')) {
            $updatedRoles = $currentRoles . ',seller';
            $usersModel->update($userId, ['role' => $updatedRoles]);

            $session->set('user_role', $updatedRoles);
        }

        return redirect()->to('/list-property');
    }
}
