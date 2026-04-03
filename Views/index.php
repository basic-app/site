<?= $this->extend('BasicApp\Site\layouts/app');?>
<?= $this->section('content');?>
    <?= view_cell('SiteCell::page', [
        'id' => 'index',
        'title' => 'Index title',
        'content' => '<p>Index content.</p>',
        'even' => false
    ]);?>
<?= $this->endSection();?>
<?php $this->section('styles');?>
<style type="text/css">
.bg-primary {
    background-color: #000000 !important;
}
</style>
<?php $this->endSection();?>
<?php
$this->setVar('title', 'Test title');