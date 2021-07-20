<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class ShowYesNoQuestion extends BaseStep
{
    /**
     * Question test to display
     * @var string
     */
    protected string $question;

    /**
     * Set an optional scriptAction when the no button is pressed
     * @var ScriptAction|null
     */
    public ?ScriptAction $noAction = null;

    /**
     * ScriptAction when the yes button is pressed
     * @var ScriptAction
     */
    protected ScriptAction $yesAction;

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @param string $question
     * @return ShowYesNoQuestion
     */
    public function setQuestion(string $question): ShowYesNoQuestion
    {
        $this->question = $question;
        return $this;
    }

    /**
     * @return ScriptAction|null
     */
    public function getNoAction(): ?ScriptAction
    {
        return $this->noAction;
    }

    /**
     * @param ScriptAction|null $noAction
     * @return ShowYesNoQuestion
     */
    public function setNoAction(?ScriptAction $noAction): ShowYesNoQuestion
    {
        $this->noAction = $noAction;
        return $this;
    }

    /**
     * @return ScriptAction
     */
    public function getYesAction(): ScriptAction
    {
        return $this->yesAction;
    }

    /**
     * @param ScriptAction $yesAction
     * @return ShowYesNoQuestion
     */
    public function setYesAction(ScriptAction $yesAction): ShowYesNoQuestion
    {
        $this->yesAction = $yesAction;
        return $this;
    }
}
