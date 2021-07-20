<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Enums\FrameMode;
use Bank2Loyalty\Models\Scripting\ScriptAction;

class ShowCard extends BaseStep
{
    /**
     * key of image to show, if not found or not set, program image is shown
     * @var string|null
     */
    protected ?string $imageKey = null;

    /**
     * When true a label "new" is placed in the right-top of the image
     * @var bool
     */
    protected bool $showNewLabel;

    /**
     * String to show in the bottom of the image, left aligned to the image
     * @var string|null
     */
    protected ?string $imageTextLeft = null;

    /**
     * String to show in the bottom of the image, center aligned to the image
     * @var string|null
     */
    protected ?string $imageTextCenter = null;

    /**
     * String to show in the bottom of the image, right aligned to the image
     * @var string|null
     */
    protected ?string $imageTextRight = null;

    /**
     * One value of FrameMode enu
     * @see FrameMode
     * @var int
     */
    protected int $imageFrameMode;

    /**
     * Text to show in the footer of the screen
     * @var string|null
     */
    protected ?string $footerText = null;

    /**
     * Text to show in the button that is shown in the footer of the screen
     * @var string|null
     */
    protected ?string $buttonText = null;

    /**
     * Action that will get executed when the button is pressed
     * @var ScriptAction|null
     */
    protected ?ScriptAction $buttonAction;

    /**
     * @return string|null
     */
    public function getImageKey(): ?string
    {
        return $this->imageKey;
    }

    /**
     * @param string|null $imageKey
     * @return ShowCard
     */
    public function setImageKey(?string $imageKey): ShowCard
    {
        $this->imageKey = $imageKey;
        return $this;
    }

    /**
     * @return bool
     */
    public function isShowNewLabel(): bool
    {
        return $this->showNewLabel;
    }

    /**
     * @param bool $showNewLabel
     * @return ShowCard
     */
    public function setShowNewLabel(bool $showNewLabel): ShowCard
    {
        $this->showNewLabel = $showNewLabel;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageTextLeft(): ?string
    {
        return $this->imageTextLeft;
    }

    /**
     * @param string|null $imageTextLeft
     * @return ShowCard
     */
    public function setImageTextLeft(?string $imageTextLeft): ShowCard
    {
        $this->imageTextLeft = $imageTextLeft;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageTextCenter(): ?string
    {
        return $this->imageTextCenter;
    }

    /**
     * @param string|null $imageTextCenter
     * @return ShowCard
     */
    public function setImageTextCenter(?string $imageTextCenter): ShowCard
    {
        $this->imageTextCenter = $imageTextCenter;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getImageTextRight(): ?string
    {
        return $this->imageTextRight;
    }

    /**
     * @param string|null $imageTextRight
     * @return ShowCard
     */
    public function setImageTextRight(?string $imageTextRight): ShowCard
    {
        $this->imageTextRight = $imageTextRight;
        return $this;
    }

    /**
     * @return int
     */
    public function getImageFrameMode(): int
    {
        return $this->imageFrameMode;
    }

    /**
     * @param int $imageFrameMode
     * @return ShowCard
     */
    public function setImageFrameMode(int $imageFrameMode): ShowCard
    {
        $this->imageFrameMode = $imageFrameMode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFooterText(): ?string
    {
        return $this->footerText;
    }

    /**
     * @param string|null $footerText
     * @return ShowCard
     */
    public function setFooterText(?string $footerText): ShowCard
    {
        $this->footerText = $footerText;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getButtonText(): ?string
    {
        return $this->buttonText;
    }

    /**
     * @param string|null $buttonText
     * @return ShowCard
     */
    public function setButtonText(?string $buttonText): ShowCard
    {
        $this->buttonText = $buttonText;
        return $this;
    }

    /**
     * @return ScriptAction|null
     */
    public function getButtonAction(): ?ScriptAction
    {
        return $this->buttonAction;
    }

    /**
     * @param ScriptAction|null $buttonAction
     * @return ShowCard
     */
    public function setButtonAction(?ScriptAction $buttonAction): ShowCard
    {
        $this->buttonAction = $buttonAction;
        return $this;
    }
}
