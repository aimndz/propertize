<?php

namespace App\Controllers;

use App\Models\UsersModel;
use App\Models\ModeOfPaymentModel;

class Mode_of_payment extends BaseController
{
    public function index(): string
    {
        return view('Mode_of_payment/index');
    }

    public function addModeOfPayment()
    {
        $data = [
            'mode' => $this->request->getPost('mode'),
            'account_id' => session('user_id'),
            'account_name' => $this->request->getPost('account_name'),
            'account_number' => $this->request->getPost('account_number'),
        ];

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

        $paymentModel = new ModeOfPaymentModel();
        $paymentModel->save($data);



        return redirect()->to('/list-property')->with('success', 'Mode of payment added successfully.');
    }
}
