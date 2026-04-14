<?php 

helper(['url']);

echo view_cell('Site::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'keywords' => $keywords ?? null,
	'description' => $description ?? null,
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => [
		'title' => 'Welcome to Basic App',
		'description' => 'A functional CodeIgniter 4 boilerplate for websites'
	],
	'footer' => [
		'copyright' => 'Copyright © ' . parse_url(base_url(), PHP_URL_HOST) . ' - ' . date('Y'),
		'menu' => [
            'items' => [
    			[
                    'item_name' => 'Github',
    				'item_url' => 'https://github.com/basic-app/appstarter',
    				'item_html_icon' => 'fa-github'
    			]
            ]
		]
	],
	'nav' => [
		'title' => 'Basic App',
		'baseUrl' => base_url('/'),
		'menu' => [
            'activeItem' => $navMenuActiveItem ?? null,
            'items' => [
    			'index' => [
    				'item_name' => 'Index', 
    				'item_url' => base_url('/')
    			]
            ]
		]
	]
]);
