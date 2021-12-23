<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class GraphInfo
{
    /**
     * The imagekey of the graphic image to show.
     * @var string
     */
    protected string $imageKey;

    /**
     * The text to show in the bottom center of the image.
     * @var string|null
     */
    protected ?string $imageLabelText = null;

    /**
     * The text to show in the select button below the image.
     * @var string
     */
    protected string $buttonText;

    /**
     * The action that should be executed when the button is pressed
     * @var ScriptAction
     */
    protected ScriptAction $buttonAction;

    /**
     * @return string
     */
    public function getImageKey(): string
    {
        return $this->imageKey;
    }

    /**
     * @param string $imageKey
     */
    public function setImageKey(string $imageKey): void
    {
        $this->imageKey = $imageKey;
    }

    /**
     * @return string
     */
    public function getImageLabelText(): ?string
    {
        return $this->imageLabelText;
    }

    /**
     * @param string $imageLabelText
     */
    public function setImageLabelText(?string $imageLabelText): void
    {
        $this->imageLabelText = $imageLabelText;
    }

    /**
     * @return string
     */
    public function getButtonText(): string
    {
        return $this->buttonText;
    }

    /**
     * @param string $buttonText
     */
    public function setButtonText(string $buttonText): void
    {
        $this->buttonText = $buttonText;
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
     */
    public function setButtonAction(ScriptAction $buttonAction): void
    {
        $this->buttonAction = $buttonAction;
    }
}
