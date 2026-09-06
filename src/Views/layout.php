<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use BasicApp\Site\Events\SiteFooterMenu;
use BasicApp\Site\Events\SiteMenu;
use BasicApp\Site\Events\SiteScripts;
use BasicApp\Site\Events\SiteStyles;

helper(['render_view', 'styles', 'scripts']);

$siteMenu = SiteMenu::trigger();

$siteFooterMenu = SiteFooterMenu::trigger();

$siteStyles = SiteStyles::trigger([
    'styles' => array_merge(
        ['<!--render_styles()-->'],
        [render_view('BasicApp\Site\styles')],
        $styles ?? []
    )
]);

$siteScripts = SiteScripts::trigger([
    'scripts' => array_merge(
        ['<!--render_scripts()-->'],
        [render_view('BasicApp\Site\scripts')],
        $scripts ?? []
    )
]);

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
    'copyright' => $siteSettings->copyright,
    'footerMenu' => $siteFooterMenu->items,
    'copyright' => strtr($siteSettings->copyright, ['{Y}' => date('Y')]),
    'scripts' => implode("\n", $siteScripts->scripts),
    'styles' => implode("\n", $siteStyles->styles)
]);

$content = str_replace('<!--render_styles()-->', render_styles(), $content);
$content = str_replace('<!--render_scripts()-->', render_scripts(), $content);

echo $content;