<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site;

use CodeIgniter\Events\Events;
use BasicApp\Admin\Events\AdminMenu;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */
Events::on('pre_system', static function() : void {
});

Events::on(AdminMenu::class, static function(AdminMenu $event) : void {
    $event->prependItems(lang('Admin.Settings'), [
        'site-settings' => [
            'label' => lang('Admin.Site Settings'),
            'url' => site_url('admin/site-settings'),
            'icon' => 'fa-regular fa-house'
        ]
    ]);
});
