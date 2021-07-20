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
}
