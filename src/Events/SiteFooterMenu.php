<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Events;

use BasicApp\Core\Event;

class SiteFooterMenu extends Event
{
    public array $items = [];

    public function addItems(array $items) 
    {
        $this->items = array_merge(
            $this->items ?? [],
            $items
        );
    }

    public function prependItems(array $items) 
    {
        $this->items = array_merge(
            $items,
            $this->items ?? []
        );
    }
}