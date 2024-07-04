<?php

namespace App\Models;

use CodeIgniter\Model;

class ModeOfPaymentModel extends Model
{
    protected $table = 'mode_of_payment';
    protected $allowedFields = [
        'id', 'account_id', 'account_name', 'mode', 'account_number'
    ];
}
