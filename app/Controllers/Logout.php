<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Logout extends BaseController
{
    public function index()
    {
        $this->session->destroy();
        return redirect()->to('login');
    }
}
