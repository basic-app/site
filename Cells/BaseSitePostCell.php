<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Cells;

use CodeIgniter\View\Cells\Cell;

abstract class BaseSitePostCell extends Cell
{
    public $title;
    public $description;
    public $authorName;
    public $authorUrl;
    public $createdDate;
}