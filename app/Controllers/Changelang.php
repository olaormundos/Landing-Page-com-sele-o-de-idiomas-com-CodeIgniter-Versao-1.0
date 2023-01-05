<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Changelang extends BaseController
{   
    public function index($lang)
    {   
        $this->session->set('lang', $lang);
        return redirect()->to('hosts');
    }
}
