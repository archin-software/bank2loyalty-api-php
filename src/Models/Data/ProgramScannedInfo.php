<?php

namespace Bank2Loyalty\Models\Data;

use Bank2Loyalty\Models\Enums\ScannedCodes;

class ProgramScannedInfo
{
    /**
     * The format of the scanned data that is read.
     * @see ScannedCodes
     * @var int
     */
    private int $scannedCode;

    /**
     * A string representation of the data that has been scanned.
     * @var string
     */
    private string $scannedData;

    /**
     * @return int
     */
    public function getScannedCode(): int
    {
        return $this->scannedCode;
    }

    /**
     * @param int $scannedCode
     * @return ProgramScannedInfo
     */
    public function setScannedCode(int $scannedCode): ProgramScannedInfo
    {
        $this->scannedCode = $scannedCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getScannedData(): string
    {
        return $this->scannedData;
    }

    /**
     * @param string $scannedData
     * @return ProgramScannedInfo
     */
    public function setScannedData(string $scannedData): ProgramScannedInfo
    {
        $this->scannedData = $scannedData;
        return $this;
    }
}
