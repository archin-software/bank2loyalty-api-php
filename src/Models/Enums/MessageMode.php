<?php

namespace PhpExample\Models\Enums;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

class MessageMode extends Enum
{
    use AutoDiscoveredValuesTrait;

    /**
     * Show a "walking hand" image
     */
    public const Processing = 0;

    /**
     * Show a "stop hand" image
     */
    public const Error = 1;

    /**
     * Show a "ok hand" image
     */
    public const Approved = 2;

    /**
     * Show an "applause hand" image
     */
    public const Celebrate = 3;
}
