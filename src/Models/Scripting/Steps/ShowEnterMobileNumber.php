<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class ShowEnterMobileNumber extends BaseStep
{
    /**
     * Set the timeout action when a timeout is hit
     * @var ScriptAction|null
     */
    protected ?ScriptAction $cancelAction = null;

    /**
     * Instruction that shows on the left pane
     * @return string
     */
    protected $instructionText;

    /**
     * The country where the mobile number is originating. (ISO 3166-1 alpha-2)
     * @return string
     */
    protected $isoCountry;

    /**
     * @return ScriptAction|null
     */
    public function getCancelAction(): ?ScriptAction
    {
        return $this->cancelAction;
    }

    /**
     * @param ScriptAction|null $cancelAction
     * @return ShowEnterMobileNumber
     */
    public function setCancelAction(?ScriptAction $cancelAction): ShowEnterMobileNumber
    {
        $this->cancelAction = $cancelAction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstructionText()
    {
        return $this->instructionText;
    }

    /**
     * @param mixed $instructionText
     * @return ShowEnterMobileNumber
     */
    public function setInstructionText($instructionText)
    {
        $this->instructionText = $instructionText;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIsoCountry()
    {
        return $this->isoCountry;
    }

    /**
     * @param mixed $isoCountry
     * @return ShowEnterMobileNumber
     */
    public function setIsoCountry($isoCountry)
    {
        $this->isoCountry = $isoCountry;
        return $this;
    }
}
