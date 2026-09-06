<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
use CodeIgniter\Router\RouteCollection;

/** @var RouteCollection $routes */
$routes->match(['GET', 'POST'], 'admin/site-settings', '\BasicApp\Site\Controllers\Admin\SiteSettingsController::index');