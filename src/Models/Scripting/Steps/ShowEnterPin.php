<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Scripting\ScriptAction;

class ShowEnterPin extends BaseStep
{
    /**
     * Instruction that shows on the left pane
     * @var string
     */
    protected string $instructionText;

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
     * the required pincode length. Supported are 4,5 and 6 digits.
     * Any other supplied number is matched to an appropiate logical value
     *
     * @var int
     */
    protected int $pinLength;

    /**
     * the RSA public key (in PEM format) to use to encrypt the entered pin
     * @var string
     */
    protected string $publicCertificate;

    /**
     * Override the default keyString "pin" to the specified string
     * @var string|null
     */
    protected ?string $keyStringPinOverride = null;

    /**
     * @return string
     */
    public function getInstructionText(): string
    {
        return $this->instructionText;
    }

    /**
     * @param string $instructionText
     * @return ShowEnterPin
     */
    public function setInstructionText(string $instructionText): ShowEnterPin
    {
        $this->instructionText = $instructionText;
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
     * @return ShowEnterPin
     */
    public function setButtonText(?string $buttonText): ShowEnterPin
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
     * @return ShowEnterPin
     */
    public function setButtonScriptAction(?ScriptAction $buttonScriptAction): ShowEnterPin
    {
        $this->buttonScriptAction = $buttonScriptAction;
        return $this;
    }

    /**
     * @return int
     */
    public function getPinLength(): int
    {
        return $this->pinLength;
    }

    /**
     * @param int $pinLength
     * @return ShowEnterPin
     */
    public function setPinLength(int $pinLength): ShowEnterPin
    {
        $this->pinLength = $pinLength;
        return $this;
    }

    /**
     * @return string
     */
    public function getPublicCertificate(): string
    {
        return $this->publicCertificate;
    }

    /**
     * @param string $publicCertificate
     * @return ShowEnterPin
     */
    public function setPublicCertificate(string $publicCertificate): ShowEnterPin
    {
        $this->publicCertificate = $publicCertificate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyStringPinOverride(): ?string
    {
        return $this->keyStringPinOverride;
    }

    /**
     * @param string|null $keyStringPinOverride
     * @return ShowEnterPin
     */
    public function setKeyStringPinOverride(?string $keyStringPinOverride): ShowEnterPin
    {
        $this->keyStringPinOverride = $keyStringPinOverride;
        return $this;
    }
}
