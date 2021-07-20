<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Enums\MessageMode;

class ShowMessage extends BaseStep
{
    /**
     * Text to display
     * @var string
     */
    protected string $textToShow;

    /**
     * Graphics you want to select
     * @see MessageMode
     * @var int
     */
    protected int $messageMode;

    /**
     * @return string
     */
    public function getTextToShow(): string
    {
        return $this->textToShow;
    }

    /**
     * @param string $textToShow
     * @return ShowMessage
     */
    public function setTextToShow(string $textToShow): ShowMessage
    {
        $this->textToShow = $textToShow;
        return $this;
    }

    /**
     * @return int
     */
    public function getMessageMode(): int
    {
        return $this->messageMode;
    }

    /**
     * @param int $messageMode
     * @return ShowMessage
     */
    public function setMessageMode(int $messageMode): ShowMessage
    {
        $this->messageMode = $messageMode;
        return $this;
    }
}
