<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSiteButtonCell extends Cell
{
    public $href;
    public $slot;
}