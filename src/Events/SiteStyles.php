<?php

declare(strict_types=1);
/**
 * @author Basic App Dev Team
 * @license MIT
 */

namespace BasicApp\Site\Events;

use BasicApp\Event\Event;

class SiteStyles extends Event
{
    public array $styles = [];
}
