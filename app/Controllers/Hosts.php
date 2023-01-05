<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Hosts extends BaseController
{
    public function index()
    {
        return view('hosts');
    }
}
