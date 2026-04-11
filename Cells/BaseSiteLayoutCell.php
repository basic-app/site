<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteLayoutCell extends Cell
{
    public $title = 'Basic App';
    public $description;
    public $keywords;
    public $locale = 'en';
    public $content;
    public $scripts;
    public $styles;
    public $header = [];
    public $footer = [];
    public $nav = [];
}