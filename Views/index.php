<?= $this->extend('BasicApp\Site\layouts/app');?>
<?= $this->section('content');?>
    <?= view_cell('SiteCell::page', [
        'id' => 'index',
        'title' => 'Index title',
        'content' => '<p>Index content.</p>',
        'even' => false
    ]);?>
<?= $this->endSection();?>
<?php
$this->setVar('title', 'Test title');