<?php
/**
 * @author Basic App Dev Team
 * @license MIT
 */
namespace BasicApp\Site\Events;

use BasicApp\Core\Event;

class SiteStyles extends Event
{
    public array $styles = [];
}