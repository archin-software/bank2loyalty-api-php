<?php

namespace PhpExample\Models\Scripting\Steps;

use PhpExample\Models\Scripting\BaseModel;
use PhpExample\Models\Scripting\CardNumberInfo;
use PhpExample\Models\Scripting\ScriptAction;

abstract class BaseStep extends BaseModel
{
    /**
     * Set the timeout of the screen
     * @var int
     */
    protected int $timeOutInSeconds;

    /**
     * Set the timeout action when a timeout is hit
     * @var ScriptAction|null
     */
    protected ?ScriptAction $timeOutAction = null;

    /**
     * Send this string to the POS when screen is shown
     * @var string|null
     */
    protected ?string $sendToPos = null;

    /**
     * If consumer is known upsert or delete a cardnumber
     * @var CardNumberInfo|null
     */
    protected ?CardNumberInfo $cardNumberInfo = null;

    /**
     * @return int
     */
    public function getTimeOutInSeconds(): int
    {
        return $this->timeOutInSeconds;
    }

    /**
     * @param int $timeOutInSeconds
     * @return BaseStep
     */
    public function setTimeOutInSeconds(int $timeOutInSeconds): BaseStep
    {
        $this->timeOutInSeconds = $timeOutInSeconds;
        return $this;
    }

    /**
     * @return ScriptAction|null
     */
    public function getTimeOutAction(): ?ScriptAction
    {
        return $this->timeOutAction;
    }

    /**
     * @param ScriptAction|null $timeOutAction
     * @return BaseStep
     */
    public function setTimeOutAction(?ScriptAction $timeOutAction): BaseStep
    {
        $this->timeOutAction = $timeOutAction;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getSendToPos(): ?string
    {
        return $this->sendToPos;
    }

    /**
     * @param string|null $sendToPos
     * @return BaseStep
     */
    public function setSendToPos(?string $sendToPos): BaseStep
    {
        $this->sendToPos = $sendToPos;
        return $this;
    }

    /**
     * @return CardNumberInfo|null
     */
    public function getCardNumberInfo(): ?CardNumberInfo
    {
        return $this->cardNumberInfo;
    }

    /**
     * @param CardNumberInfo|null $cardNumberInfo
     * @return BaseStep
     */
    public function setCardNumberInfo(?CardNumberInfo $cardNumberInfo): BaseStep
    {
        $this->cardNumberInfo = $cardNumberInfo;
        return $this;
    }
}
