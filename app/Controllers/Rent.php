<?php

namespace App\Controllers;

class Rent extends BaseController
{
    public function index(): string
    {
        return view('Rent/index');
    }
}
