<?php

namespace App\Models;

use CodeIgniter\Model;

class PropertiesModel extends Model
{
    protected $table = 'properties';
    protected $primaryKey = 'property_id';
    protected $allowedFields = [
        'property_id', 'owner_id', 'street', 'village', 'city', 'province', 'country', 'postal_code', 'landmark', 'type',
        'name', 'lot_size', 'floor_area', 'year_built', 'no_of_beds', 'no_of_bathrooms', 'no_of_parkings',
        'description', 'lease_term', 'utilities', 'price', 'status', 'tenant', 'approval_status', 'deleted_at', 'transfer_to', 'transfer_date',
        'annual_interest_rate', 'payment_duration'
    ];
}
