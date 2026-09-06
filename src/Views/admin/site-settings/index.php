<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
$this->setVar('title', lang('Admin.Settings'));
$this->setVar('activeMenu', 'site-settings');
$this->setVar('description', lang('Admin.Site Settings'));

helper(['form']);

?>
<?php $this->extend('BasicApp\Admin\layout');?>
<?php $this->section('content');?>

<?= form_open_multipart('admin/site-settings');?>

<?= view_cell('AdminInput', [
    'label' => $labels['name'] ?? 'name',
    'error' => $errors['name'] ?? null,
    'attributes' => [
        'name' => 'name',
        'value' => set_value('name', $data->name)
    ]
]);?>

<?= view_cell('AdminInput', [
    'label' => $labels['title'] ?? 'title',
    'error' => $errors['title'] ?? null,
    'attributes' => [
        'name' => 'title',
        'value' => set_value('title', $data->title)
    ]
]);?>

<?= view_cell('AdminInput', [
    'label' => $labels['keywords'] ?? 'keywords',
    'error' => $errors['keywords'] ?? null,
    'attributes' => [
        'name' => 'keywords',
        'value' => set_value('keywords', $data->keywords)
    ]
]);?>

<?= view_cell('AdminInput', [
    'label' => $labels['description'] ?? 'description',
    'error' => $errors['description'] ?? null,
    'attributes' => [
        'name' => 'description',
        'value' => set_value('description', $data->description)
    ]
]);?>

<?= view_cell('AdminInput', [
    'label' => $labels['copyright'] ?? 'copyright',
    'error' => $errors['copyright'] ?? null,
    'attributes' => [
        'name' => 'copyright',
        'value' => set_value('copyright', $data->copyright)
    ]
]);?>

<?= view_cell('AdminValidationErrors', [
    'errors' => $errors
]);?>

<?= view_cell('AdminFormButton', [
    'label' => lang('Admin.Save'),
    'attributes' => [
        'type' => 'submit'
    ]
]);?>

<?= form_close();?>

<?php $this->endSection();?>