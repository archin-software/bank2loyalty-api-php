<?php

namespace Bank2Loyalty\Models\Enums;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

class FrameMode extends Enum
{
    use AutoDiscoveredValuesTrait;

    /**
     * No border is drawn around the image
     */
    public const Off = 0;

    /**
     * A green border is drawn around the image
     */
    public const Green = 1;

    /**
     * A red border is drawn around the image
     */
    public const Red = 2;

    /**
     * A gray border is drawn around the image
     */
    public const Gray = 3;
}
