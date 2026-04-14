<?php

use CodeIgniter\Events\Events;
use Config\Pager;

Events::on('pre_system', function() {
    $config = config(Pager::class);
    $config->templates['site'] = 'BasicApp\Site\pager';
});