<?php

namespace PhpExample\Models\Enums;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

class CardNumberActions extends Enum
{
    use AutoDiscoveredValuesTrait;

    public const UpsertCardNumber = 0;
    public const DeleteCardNumber = 1;
}
