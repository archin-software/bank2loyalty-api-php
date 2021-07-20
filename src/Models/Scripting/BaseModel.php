<?php

namespace Bank2Loyalty\Models\Scripting;

use JsonSerializable;

abstract class BaseModel implements JsonSerializable
{
    /**
     * Get all filled protected properties.
     *
     * @return array
     */
    public function jsonSerialize(): array
    {
        return array_filter(get_object_vars($this), function ($value) {
            return !is_null($value);
        });
    }
}
