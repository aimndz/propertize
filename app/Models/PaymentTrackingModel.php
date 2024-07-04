<?php

namespace App\Models;

use CodeIgniter\Model;

class PaymentTrackingModel extends Model
{
    protected $table = 'payment_tracking';
    protected $allowedFields = [
        'id', 'property_id', 'property_name', 'buyer_id', 'payment_month', 'amount', 'status'
    ];
}
