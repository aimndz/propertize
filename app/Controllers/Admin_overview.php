<?php

namespace App\Controllers;

use App\Models\UsersModel;

class Admin_overview extends BaseController
{
    public function index(): string
    {
        return view('Admin_overview/index');
    }
}
