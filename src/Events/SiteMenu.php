<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Site\Events;

use BasicApp\Event\Event;

class SiteMenu extends Event
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
