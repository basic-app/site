<?php 

helper(['url']);

echo view_cell('SiteCell::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'keywords' => '',
	'description' => '',
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => [
		'title' => 'Welcome to Basic App',
		'description' => 'A functional CodeIgniter 4 boilerplate for websites'
	],
	'footer' => [
		'copyright' => 'Copyright © ' . parse_url(base_url(), PHP_URL_HOST) . ' - ' . date('Y'),
		'menu' => [
			[
				'href' => 'https://github.com/basic-app',
				'icon' => 'fa:fa-github'
			]
		]
	],
	'nav' => [
		'title' => 'Basic App',
		'baseUrl' => base_url('/'),
		'menu' => [
			'index' => [
				'label' => 'Index', 
				'url' => '#index'
			]
		]
	]
]);
