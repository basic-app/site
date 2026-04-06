<?php

use BasicApp\Site\SiteEvents;

$theme = service('theme');

SiteEvents::registerAssets($theme->head, $theme->beginBody, $theme->endBody);

$params = SiteEvents::mainLayout([
    'mainMenu' => $this->data['mainMenu'] ?? [],
    'content' => $content,
    'title' => $this->data['title'] ?? null
]);

echo $theme->mainLayout($params);