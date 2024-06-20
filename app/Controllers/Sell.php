<?php

namespace App\Controllers;

class Sell extends BaseController
{
    public function index(): string
    {
        return view('Sell/index');
    }
}
