<?php

namespace App\Controllers;

use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;

class Dashboard extends BaseController
{
    public function index()
    {
        $session = session();
        $userId = $session->get('user_id');

        $propertiesModel = new PropertiesModel();
        $properties = $propertiesModel->where('owner_id', $userId)->findAll();

        $data['properties'] = $properties;

        $data['hasProperties'] = !empty($properties);

        echo view('Dashboard/index', $data);
    }
}
