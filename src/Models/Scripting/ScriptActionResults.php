<?php

namespace PhpExample\Models\Scripting;

class ScriptActionResults extends BaseModel
{
    /**
     * customResponseId from original Script if set, is for implementer use, for example to save a state
     * @var string|null
     */
    protected ?string $customResponseId = null;

    /**
     * List of action results
     * @var ScriptActionResult[]
     */
    protected array $actionResults = [];

    /**
     * @return string|null
     */
    public function getCustomResponseId(): ?string
    {
        return $this->customResponseId;
    }

    /**
     * @param string|null $customResponseId
     * @return ScriptActionResults
     */
    public function setCustomResponseId(?string $customResponseId): ScriptActionResults
    {
        $this->customResponseId = $customResponseId;
        return $this;
    }

    /**
     * @return ScriptActionResult[]
     */
    public function getActionResults(): array
    {
        return $this->actionResults;
    }

    /**
     * @param ScriptActionResult[] $actionResults
     * @return ScriptActionResults
     */
    public function setActionResults(array $actionResults): ScriptActionResults
    {
        $this->actionResults = $actionResults;
        return $this;
    }
}
