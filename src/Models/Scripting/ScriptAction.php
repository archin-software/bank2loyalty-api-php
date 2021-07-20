<?php

namespace Bank2Loyalty\Models\Scripting;

class ScriptAction extends BaseModel
{
    /**
     * Send the specified string to the POS
     * @var string|null
     */
    protected ?string $sendToPos = null;

    /**
     * Return the specified scriptActionResult data
     * @var ScriptActionResult|null
     */
    protected ?ScriptActionResult $scriptActionResult = null;

    /**
     * Card number handling instruction, upsert or delete cardnumber if consumer is know
     * @var CardNumberInfo|null
     */
    protected ?CardNumberInfo $cardNumberInfo = null;

    /**
     * Execute the specified zero-based scriptstep
     * @var int|null
     */
    protected ?int $nextScriptStep = null;

    /**
     * @return string|null
     */
    public function getSendToPos(): ?string
    {
        return $this->sendToPos;
    }

    /**
     * @param string|null $sendToPos
     * @return ScriptAction
     */
    public function setSendToPos(?string $sendToPos): ScriptAction
    {
        $this->sendToPos = $sendToPos;
        return $this;
    }

    /**
     * @return ScriptActionResult|null
     */
    public function getScriptActionResult(): ?ScriptActionResult
    {
        return $this->scriptActionResult;
    }

    /**
     * @param ScriptActionResult|null $scriptActionResult
     * @return ScriptAction
     */
    public function setScriptActionResult(?ScriptActionResult $scriptActionResult): ScriptAction
    {
        $this->scriptActionResult = $scriptActionResult;
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
     * @return ScriptAction
     */
    public function setCardNumberInfo(?CardNumberInfo $cardNumberInfo): ScriptAction
    {
        $this->cardNumberInfo = $cardNumberInfo;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getNextScriptStep(): ?int
    {
        return $this->nextScriptStep;
    }

    /**
     * @param int|null $nextScriptStep
     * @return ScriptAction
     */
    public function setNextScriptStep(?int $nextScriptStep): ScriptAction
    {
        $this->nextScriptStep = $nextScriptStep;
        return $this;
    }
}
