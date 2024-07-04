<?php

namespace App\Controllers;

use App\Models\PropertiesModel;
use App\Models\UsersModel;
use App\Models\ModeOfPaymentModel;
use App\Models\PaymentTrackingModel;

class Assign extends BaseController
{
    public function index(): string
    {
        return view('Assign/index');
    }

    public function assign($propertyId)

    {
        return view('Assign/index', ['propertyId' => $propertyId]);
        return view('Assign/index');
    }

    public function performAssign($propertyId)
    {
        $transferData = [
            'tenant' => $this->request->getPost('user_id'),
        ];

        $propertiesModel = new PropertiesModel();
        $propertiesModel->update($propertyId, $transferData);

        return redirect()->to('/dashboard');
    }
}
