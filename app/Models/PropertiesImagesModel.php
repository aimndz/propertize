<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertiesImagesModel extends Model
{
    protected $table = 'properties_images';
    protected $allowedFields = [
        'image_id', 'property_id', 'image'
    ];
}
