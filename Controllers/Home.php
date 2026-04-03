<?php

namespace BasicApp\Site\Controllers;

use App\Controllers\BaseController;

class Home extends BaseController
{
    public function index(): string
    {
        return view('BasicApp\Site\index');
    }
}
