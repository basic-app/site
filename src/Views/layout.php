<?php
declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 * 
 * @var ?array $scripts
 * @var ?array $styles
 */
use BasicApp\Site\Events\SiteFooterMenu;
use BasicApp\Site\Events\SiteMenu;
use BasicApp\Site\Events\SiteScripts;
use BasicApp\Site\Events\SiteStyles;

helper(['render_view', 'styles', 'scripts']);

/** @var SiteMenu $siteMenu */
$siteMenu = SiteMenu::trigger();

/** @var SiteFooterMenu $siteFooterMenu */
$siteFooterMenu = SiteFooterMenu::trigger();

/** @var SiteStyles $siteStyles */
$siteStyles = SiteStyles::trigger();

/** @var SiteScripts $siteScripts */
$siteScripts = SiteScripts::trigger();

$siteSettings = service('siteSettings');

$content = view_cell('SiteLayout', [
    'content' => $this->renderSection('content'),
    'lang' => service('request')->getLocale(),
    'title' => $title ?? null,
    'description' => $description ?? null,
    'keywords' => $keywords ?? null,
    'name' => $siteSettings->name,
    'menu' => $siteMenu->items,
    'activeMenu' => $activeMenu ?? null,
    'footerMenu' => $siteFooterMenu->items,
    'copyright' => strtr($siteSettings->copyright, ['{Y}' => date('Y')]),
    'styles' => '<!--render_styles()-->' // assets
        . implode("\n", $siteStyles->getItems()) // globals
        . $this->renderSection('pageStyles'), // page
    'scripts' => '<!--render_scripts()-->' // assets
        . implode("\n", $siteScripts->getItems()) // global
        . $this->renderSection('pageScripts') // page
]);

$content = str_replace('<!--render_styles()-->', render_styles(), $content);
$content = str_replace('<!--render_scripts()-->', render_scripts(), $content);

echo $content;