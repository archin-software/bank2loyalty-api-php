<?php

namespace Bank2Loyalty\Models\Scripting\Steps;

use Bank2Loyalty\Models\Enums\ScanTypes;

class ShowOpticalScan extends BaseStep
{
    /**
     * Text to instruct the user to scan a code
     * @var string
     */
    protected string $scanInstruction;

    /**
     * Set of scantypes to use for the scan action
     * @see ScanTypes
     * @var int
     */
    protected int $scanType;

    /**
     * override the standard keystring name "scannedData" with this string
     * @var string|null
     */
    protected ?string $keyStringScannedDataOverride;

    /**
     * override the standard keystring name "scannedCode" with this string
     * @var string|null
     */
    protected ?string $keyStringScannedCodeOverride;

    /**
     * @return string
     */
    public function getScanInstruction(): string
    {
        return $this->scanInstruction;
    }

    /**
     * @param string $scanInstruction
     * @return ShowOpticalScan
     */
    public function setScanInstruction(string $scanInstruction): ShowOpticalScan
    {
        $this->scanInstruction = $scanInstruction;
        return $this;
    }

    /**
     * @return int
     */
    public function getScanType(): int
    {
        return $this->scanType;
    }

    /**
     * @param int $scanType
     * @return ShowOpticalScan
     */
    public function setScanType(int $scanType): ShowOpticalScan
    {
        $this->scanType = $scanType;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyStringScannedDataOverride(): ?string
    {
        return $this->keyStringScannedDataOverride;
    }

    /**
     * @param string|null $keyStringScannedDataOverride
     * @return ShowOpticalScan
     */
    public function setKeyStringScannedDataOverride(?string $keyStringScannedDataOverride): ShowOpticalScan
    {
        $this->keyStringScannedDataOverride = $keyStringScannedDataOverride;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getKeyStringScannedCodeOverride(): ?string
    {
        return $this->keyStringScannedCodeOverride;
    }

    /**
     * @param string|null $keyStringScannedCodeOverride
     * @return ShowOpticalScan
     */
    public function setKeyStringScannedCodeOverride(?string $keyStringScannedCodeOverride): ShowOpticalScan
    {
        $this->keyStringScannedCodeOverride = $keyStringScannedCodeOverride;
        return $this;
    }
}
