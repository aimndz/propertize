<?php

namespace App\Controllers;


use App\Models\PropertiesModel;
use App\Models\PropertiesImagesModel;

class Rent extends BaseController
{
    public function index(): string
    {
        $propertiesModel = new PropertiesModel();
        $propertiesImagesModel = new PropertiesImagesModel();

        $properties = $propertiesModel->where('status', 'for rent')->findAll();

        foreach ($properties as &$property) {
            $image = $propertiesImagesModel
                ->where('property_id', $property['property_id'])
                ->first();

            if ($image) {
                $property['image'] = [
                    'image' => base64_encode($image['image']),
                ];
            } else {
                // $property['image'] = [
                //     'file_name' => 'default_image.jpg',
                //     'image' => base64_encode(file_get_contents('path_to_default_image.jpg')),
                // ];
            }
        }

        $data = [
            'properties' => $properties,
        ];

        return view('Rent/index', $data);
    }
}
