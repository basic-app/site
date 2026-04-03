<?php
helper(['url']);
?>
<?= view_cell('SiteCell::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => view_cell('SiteCell::header', [
		'title' => 'Welcome to Basic App',
		'description' => 'A functional CodeIgniter 4 boilerplate for websites',
		'actionLabel' => 'Start',
		'actionUrl' => '#index'
	]),
	'footer' => view_cell('SiteCell::footer', [
		'copyright' => 'Copyright © ' . parse_url(base_url(), PHP_URL_HOST) . ' - ' . date('Y')
	]),
	'nav' => view_cell('SiteCell::nav', [
		'siteName' => 'Basic App',
		'baseUrl' => base_url(),
		'items' => [
			'index' => ['label' => 'Index', 'url' => '#index']
		]
	])
]);?>