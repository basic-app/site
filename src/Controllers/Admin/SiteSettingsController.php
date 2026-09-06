<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Controllers\Admin;

use App\Controllers\Admin\BaseController;
use BasicApp\Site\Settings\SiteSettings;

class SiteSettingsController extends BaseController
{
    protected function initialize()
    {
        helper(['form']);
    }

    public function index()
    {
        $data = new SiteSettings;

        if ($this->request->is('post'))
        {
            if ($this->validateData($this->request->getPost(), $data->rules()))
            {
                $data->fill($this->validator->getValidated());

                $data->save();

                $this->session->setFlashdata('success', lang('Admin.Data saved successfully.'));
                
                return redirect()->to('admin/site-settings');
            }
            else
            {
                $errors = $this->validator->getErrors();
            }
        }

        return view('BasicApp\Site\admin/site-settings/index', [
            'data' => $data,
            'labels' => $data->labels(),
            'errors' => $errors ?? []
        ]);
    }
}
