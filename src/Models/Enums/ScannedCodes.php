<?php

namespace PhpExample\Models\Enums;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

class ScannedCodes extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const EAN = 0;
    public const UPC = 1;
    public const Code128 = 2;
    public const Code39 = 3;
    public const Code93 = 4;
    public const Codabar = 5;
    public const Interleaved2of5 = 6;
    public const Industrial2of5 = 7;
    public const Matrix2of5 = 8;
    public const Code11 = 9;
    public const MSIPlessey = 10;
    public const DataBarRss14 = 11;
    public const Qr = 12;
    public const DataMatrix = 13;
    public const PDF417 = 14;
}
