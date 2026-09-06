<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Settings;

use BasicApp\Core\Settings;

class SiteSettings extends Settings
{
    public $name;

    public $title;

    public $description;

    public $keywords;

    public $copyright;

    public function rules() : array
    {
        return [
            'name' => [
                'label' => 'Admin.Site Name',
                'rules' => ['max_length[255]', 'required']
            ],
            'title' => [
                'label' => 'Admin.Site Title (META)',
                'rules' => ['max_length[255]', 'required']
            ],
            'keywords' => [
                'label' => 'Admin.Site Keywords (META)',
                'rules' => ['max_length[255]', 'permit_empty']
            ],
            'description' => [
                'label' => 'Admin.Site Description (META)',
                'rules' => ['max_length[255]', 'permit_empty']
            ],
            'copyright' => [
                'label' => 'Admin.Site Copyright',
                'rules' => ['max_length[255]', 'required']
            ]
        ];
    }
}