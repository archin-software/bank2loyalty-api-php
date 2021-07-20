<?php

namespace Bank2Loyalty\Models\Scripting;

class MenuButton extends BaseModel
{
    /**
     * Text that will be put in the button
     * @var string
     */
    protected string $buttonText;

    /**
     * ScriptAction definition on what should happen when the button is pressed
     * @var ScriptAction
     */
    protected ScriptAction $buttonAction;

    /**
     * @return string
     */
    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    /**
     * @param string $buttonText
     * @return MenuButton
     */
    public function setButtonText(string $buttonText): MenuButton
    {
        $this->buttonText = $buttonText;
        return $this;
    }

    /**
     * @return ScriptAction
     */
    public function getButtonAction(): ScriptAction
    {
        return $this->buttonAction;
    }

    /**
     * @param ScriptAction $buttonAction
     * @return MenuButton
     */
    public function setButtonAction(ScriptAction $buttonAction): MenuButton
    {
        $this->buttonAction = $buttonAction;
        return $this;
    }
}
