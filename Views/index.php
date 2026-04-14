<?php

$this->setVar('title', 'Test title');
$this->setVar('keywords', 'Test keywords');
$this->setVar('description', 'Test description');
$this->setVar('navMenuActiveItem', 'index');

$this->extend('BasicApp\Site\layouts/app');

$this->section('content');

echo view_cell('Site::card', [
    'title' => 'Index title',
    'body' => '<p>Index content.</p>'
]);

$this->endSection();