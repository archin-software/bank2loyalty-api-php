<?php

namespace Bank2Loyalty\Models\Scripting;

class Script extends BaseModel
{
    /**
     * A user defined string that will be returned in a script-result, typically contains state info
     * @var string|null
     */
    protected ?string $customResponseId = null;

    /**
     * Attribute can be set to initiate an onboarding sequence on the reader for the scanned data
     * @var ScannedDataOnboarding|null
     */
    protected ?ScannedDataOnboarding $requestOnboarding = null;

    /**
     * An array consisting of at least one scriptStep element
     * - Not required if requestOnboarding is set.
     * @var ScriptStep[]
     */
    protected array $steps = [];

    /**
     * @return string|null
     */
    public function getCustomResponseId(): ?string
    {
        return $this->customResponseId;
    }

    /**
     * @param string|null $customResponseId
     * @return Script
     */
    public function setCustomResponseId(?string $customResponseId): Script
    {
        $this->customResponseId = $customResponseId;
        return $this;
    }

    /**
     * @return ScannedDataOnboarding|null
     */
    public function getRequestOnboarding(): ?ScannedDataOnboarding
    {
        return $this->requestOnboarding;
    }

    /**
     * @param ScannedDataOnboarding|null $requestOnboarding
     * @return Script
     */
    public function setRequestOnboarding(?ScannedDataOnboarding $requestOnboarding): Script
    {
        $this->requestOnboarding = $requestOnboarding;
        return $this;
    }

    /**
     * @return ScriptStep[]
     */
    public function getSteps(): array
    {
        return $this->steps;
    }

    /**
     * @param ScriptStep[] $steps
     * @return Script
     */
    public function setSteps(array $steps): Script
    {
        $this->steps = $steps;
        return $this;
    }

    /**
     * Add a new step.
     *
     * @param ScriptStep $step
     * @return $this
     */
    public function addStep(ScriptStep $step): Script
    {
        $this->steps[] = $step;
        return $this;
    }
}
