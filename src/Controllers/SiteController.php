<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Controllers;

use App\Controllers\BaseController;

class SiteController extends BaseController
{
    public function index(): string
    {
        return view('BasicApp\Site\index');
    }
}
