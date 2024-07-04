<?php

namespace App\Controllers;


use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;
use App\Models\UsersModel;

class Edit_Sell extends BaseController
{
    public function index($property_id)
    {
        $data = $this->get_property_details($property_id);
        return view('Edit_Sell/index', $data);
    }

    public function get_property_details($property_id)
    {
        $propertiesModel = new PropertiesModel();
        $propertiesImagesModel = new PropertiesImagesModel();
        $usersModel = new UsersModel(); // Load UsersModel for owner details

        $property = $propertiesModel->find($property_id);

        if ($property) {
            // Fetch owner details
            $owner = $usersModel->find($property['owner_id']); // Assuming 'owner_id' is the field in $property

            if ($owner) {
                // Add owner's name and email to the property array
                $property['owner_name'] = $owner['first_name'] . ' ' . $owner['last_name'];
                $property['owner_email'] = $owner['email'];
            }

            // Fetch all images associated with the property
            $images = $propertiesImagesModel
                ->where('property_id', $property_id)
                ->findAll();

            // Encode images if found
            if ($images) {
                $encodedImages = [];
                foreach ($images as $image) {
                    $encodedImages[] = [
                        'image' => base64_encode($image['image']),
                    ];
                }
                $property['images'] = $encodedImages;
            }

            return ['property' => $property];
        } else {
            throw new \CodeIgniter\Exceptions\PageNotFoundException('Property not found');
        }
    }

    public function updateSell($propertyId)
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

        // Update property data
        $model->update($propertyId, $propertyData);

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
