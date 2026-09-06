<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
helper(['render_view']);

$siteSettings = service('siteSettings');

$this->setVar('title', $siteSettings->title);
$this->setVar('description', $siteSettings->description);
$this->setVar('activeMenu', 'home');
?>
<?php $this->extend('BasicApp\Site\layout');?>
<?php $this->section('content');?>
<?= view_cell('SiteHome');?>
<?php $this->endSection();?>