<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class GraphInfo
{
    /**
     * The imagekey of the graphic image to show
     * @var string
     */
    protected string $imageKey;

    /**
     * The text to show in the bottom center of the image
     * @var string|null
     */
    protected ?string $imageLabelText = null;

    /**
     * The text to show in the select button below the image
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
     * @return GraphInfo
     */
    public function setImageKey(string $imageKey): GraphInfo
    {
        $this->imageKey = $imageKey;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageLabelText(): ?string
    {
        return $this->imageLabelText;
    }

    /**
     * @param string|null $imageLabelText
     * @return GraphInfo
     */
    public function setImageLabelText(?string $imageLabelText): GraphInfo
    {
        $this->imageLabelText = $imageLabelText;
        return $this;
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
     * @return GraphInfo
     */
    public function setButtonText(string $buttonText): GraphInfo
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
     * @return GraphInfo
     */
    public function setButtonAction(ScriptAction $buttonAction): GraphInfo
    {
        $this->buttonAction = $buttonAction;
        return $this;
    }
}
