<?php

namespace App\Controllers;


use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;

class List_rent extends BaseController
{
    public function index(): string
    {
        return view('List_rent/index');
    }

    public function list()
    {
        $model = new PropertiesModel();
        $propertiesImagesModel = new PropertiesImagesModel();
        $session = session();

        $propertyData = $this->request->getPost([
            'street', 'village', 'city', 'province', 'country', 'postal_code',
            'landmark', 'type', 'name', 'lot_size', 'floor_area',
            'year_built', 'no_of_beds', 'no_of_bathrooms', 'no_of_parkings',
            'lease_term', 'description', 'utilities', 'price', 'status', 'custom_lease_term'
        ]);

        if (isset($propertyData['utilities']) && is_array($propertyData['utilities'])) {
            $propertyData['utilities'] = implode(',', $propertyData['utilities']);
        }

        if (isset($propertyData['year_built'])) {
            $propertyData['year_built'] = $propertyData['year_built'] . '-01-01';
        }

        $propertyData['owner_id'] = $session->get('user_id');

        // Handle custom lease term if set
        if ($propertyData['lease_term'] === 'other') {
            $propertyData['lease_term'] = $propertyData['custom_lease_term'];
            unset($propertyData['custom_lease_term']); // Remove the custom term from the array
        }

        // Remove unnecessary field if not needed
        unset($propertyData['custom_lease_term']);

        $propertyId = $model->insert($propertyData);

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


        return redirect()->to('/list-rent');
    }
}
