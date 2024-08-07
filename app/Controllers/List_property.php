<?php

namespace App\Controllers;

use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;

class List_property extends BaseController
{
    public function index(): string
    {
        return view('List_property/index');
    }

    public function list()
    {
        $model = new PropertiesModel();
        $propertiesImagesModel = new PropertiesImagesModel();
        $session = session();

        // Get post data
        $propertyData = $this->request->getPost([
            'street', 'village', 'city', 'province', 'country', 'postal_code',
            'landmark', 'type', 'name', 'lot_size', 'floor_area',
            'year_built', 'no_of_beds', 'no_of_bathrooms', 'no_of_parkings', 'description', 'price', 'status', 'approval_status'
        ]);


        // Ensure price is formatted as float
        $propertyData['price'] = (float) $propertyData['price'];

        if (isset($propertyData['year_built'])) {
            $propertyData['year_built'] = $propertyData['year_built'] . '-01-01';
        }

        $propertyData['owner_id'] = $session->get('user_id');

        // Insert property data
        $propertyId = $model->insert($propertyData);

        // Handle property images
        $files = $this->request->getFiles();

        foreach ($files['files'] as $file) {
            if ($file->isValid() && !$file->hasMoved()) {
                $fileContent = file_get_contents($file->getTempName());
                $imageData = [
                    'property_id' => $propertyId,
                    'image' => $fileContent
                ];
                $propertiesImagesModel->insert($imageData);
            }
        }

        return redirect()->to('/list-property');
    }
}
