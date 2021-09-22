<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class ShowEnterAmount extends BaseStep
{
    /**
     * Instruction that shows on the left pane
     * @var string
     */
    protected string $instructionText;

    /**
     * ISO 4217 Alpha-3 currency name, examples "EUR", "USD" etc.
     * @var string
     */
    protected string $currencyName;

    /**
     * decimalPlaces to use, valid are 0, 1, 2, and 3
     * @var int
     */
    protected int $decimalPlaces;

    /**
     * stringlength must be 1. The character to be used as the decimal delimiter typical "," or "."
     * @var string
     */
    protected string $decimalChar;

    /**
     * the minimum amount that must be entered.
     * Format: Digits with optional decimal delimiter '.'. No thousand separators allowed
     * @var float|null
     */
    protected ?float $minimumAmount = null;

    /**
     * the maximum amount that can be entered.
     * Format: Digits with optional decimal delimiter '.'. No thousand separators allowed
     * Instruction that shows on the left pane
     * @var float|null
     */
    protected ?float $maximumAmount = null;

    /**
     * ISO 639-2 language code
     * @var string
     */
    protected string $errorMessageLanguage;

    /**
     * When set in the left bottom pane a button is shown with the supplied text
     * @var string|null
     */
    protected ?string $buttonText = null;

    /**
     * Script action to execute when optional button is pressed
     * @var ScriptAction|null
     */
    protected ?ScriptAction $buttonScriptAction = null;

    /**
     * Override the default keyString "amount" to the specified string
     * @var string|null
     */
    protected ?string $keyStringAmountOverride = null;

    /**
     * @return string
     */
    public function getInstructionText(): string
    {
        return $this->instructionText;
    }

    /**
     * @param string $instructionText
     * @return ShowEnterAmount
     */
    public function setInstructionText(string $instructionText): ShowEnterAmount
    {
        $this->instructionText = $instructionText;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrencyName(): string
    {
        return $this->currencyName;
    }

    /**
     * @param string $currencyName
     * @return ShowEnterAmount
     */
    public function setCurrencyName(string $currencyName): ShowEnterAmount
    {
        $this->currencyName = $currencyName;
        return $this;
    }

    /**
     * @return int
     */
    public function getDecimalPlaces(): int
    {
        return $this->decimalPlaces;
    }

    /**
     * @param int $decimalPlaces
     * @return ShowEnterAmount
     */
    public function setDecimalPlaces(int $decimalPlaces): ShowEnterAmount
    {
        $this->decimalPlaces = $decimalPlaces;
        return $this;
    }

    /**
     * @return string
     */
    public function getDecimalChar(): string
    {
        return $this->decimalChar;
    }

    /**
     * @param string $decimalChar
     * @return ShowEnterAmount
     */
    public function setDecimalChar(string $decimalChar): ShowEnterAmount
    {
        $this->decimalChar = $decimalChar;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMinimumAmount(): ?float
    {
        return $this->minimumAmount;
    }

    /**
     * @param float|null $minimumAmount
     * @return ShowEnterAmount
     */
    public function setMinimumAmount(?float $minimumAmount): ShowEnterAmount
    {
        $this->minimumAmount = $minimumAmount;
        return $this;
    }

    /**
     * @return float|null
     */
    public function getMaximumAmount(): ?float
    {
        return $this->maximumAmount;
    }

    /**
     * @param float|null $maximumAmount
     * @return ShowEnterAmount
     */
    public function setMaximumAmount(?float $maximumAmount): ShowEnterAmount
    {
        $this->maximumAmount = $maximumAmount;
        return $this;
    }

    /**
     * @return string
     */
    public function getErrorMessageLanguage(): string
    {
        return $this->errorMessageLanguage;
    }

    /**
     * @param string $errorMessageLanguage
     * @return ShowEnterAmount
     */
    public function setErrorMessageLanguage(string $errorMessageLanguage): ShowEnterAmount
    {
        $this->errorMessageLanguage = $errorMessageLanguage;
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
     * @return ShowEnterAmount
     */
    public function setButtonText(?string $buttonText): ShowEnterAmount
    {
        $this->buttonText = $buttonText;
        return $this;
    }

    /**
     * @return ScriptAction|null
     */
    public function getButtonScriptAction(): ?ScriptAction
    {
        return $this->buttonScriptAction;
    }

    /**
     * @param ScriptAction|null $buttonScriptAction
     * @return ShowEnterAmount
     */
    public function setButtonScriptAction(?ScriptAction $buttonScriptAction): ShowEnterAmount
    {
        $this->buttonScriptAction = $buttonScriptAction;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyStringAmountOverride(): ?string
    {
        return $this->keyStringAmountOverride;
    }

    /**
     * @param string|null $keyStringAmountOverride
     * @return ShowEnterAmount
     */
    public function setKeyStringAmountOverride(?string $keyStringAmountOverride): ShowEnterAmount
    {
        $this->keyStringAmountOverride = $keyStringAmountOverride;
        return $this;
    }
}
