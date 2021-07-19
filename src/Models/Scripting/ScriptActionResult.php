<?php

namespace PhpExample\Models\Scripting;

class ScriptActionResult extends BaseModel
{
    /**
     * key data
     * @var string
     */
    protected string $keyString;

    /**
     * value data
     * @var string
     */
    protected string $valueString;

    /**
     * @return string
     */
    public function getKeyString(): string
    {
        return $this->keyString;
    }

    /**
     * @param string $keyString
     * @return ScriptActionResult
     */
    public function setKeyString(string $keyString): ScriptActionResult
    {
        $this->keyString = $keyString;
        return $this;
    }

    /**
     * @return string
     */
    public function getValueString(): string
    {
        return $this->valueString;
    }

    /**
     * @param string $valueString
     * @return ScriptActionResult
     */
    public function setValueString(string $valueString): ScriptActionResult
    {
        $this->valueString = $valueString;
        return $this;
    }
}
