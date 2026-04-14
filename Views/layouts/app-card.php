<?= $this->extend('BasicApp\Site\layouts/app');?>

<?= $this->section('content');?>

<?= view_cell('Site::card', ['body' => $this->renderSection('cardBody')]);?>

<?= $this->endSection();?>