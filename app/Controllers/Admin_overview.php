<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PropertiesModel;
use App\Models\UsersModel;

class Admin_overview extends Controller
{
    public function index()
    {
        $propertiesModel = new PropertiesModel();

        $allProperties = $propertiesModel->findAll();

        $pendingProperties = $propertiesModel->where('approval_status', 'pending')->findAll();

        $usersModel = new UsersModel();
        $users = $usersModel->findAll();

        $data = [
            'allProperties' => $allProperties,
            'pendingProperties' => $pendingProperties,
            'users' => $users,
        ];

        echo view('Admin_overview/index', $data);
    }

    public function accept()
    {
        $property_id = $this->request->getPost('property_id');

        if ($property_id) {
            $propertiesModel = new PropertiesModel();
            $propertiesModel->update($property_id, ['approval_status' => 'accepted']);
        }

        return redirect()->to('/admin/overview');
    }

    public function reject()
    {
        $property_id = $this->request->getPost('property_id');

        if ($property_id) {
            $propertiesModel = new PropertiesModel();
            $propertiesModel->update($property_id, ['approval_status' => 'rejected']);
        }

        return redirect()->to('/admin/overview');
    }
}
