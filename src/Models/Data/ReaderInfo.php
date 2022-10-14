<?php

namespace Bank2Loyalty\Models\Data;

class ReaderInfo
{
    /**
     * Current version of reader protocol.
     * @var int
     */
    private int $protocolVersion;
    /**
     * MerchantId of reader, Guid format.
     * @var string
     */
    private string $merchantId;

    /**
     * BranchId of reader if it's a branch, Guid format.
     * @var string|null
     */
    private ?string $branchId = null;

    /**
     * TimeZoneId where reader is located (actually it is the timezoneId of the merchant or branch)
     * @var string
     */
    private string $ianaTimezoneId;

    /**
     * Language (2 chars) the reader is communicating in for example "nl" or "en"
     * @var string
     */
    private string $language;

    /**
     * isoCountry (iso-3166 alpha-2 code) the reader is located in.
     * @var string
     */
    private string $isoCountry;

    /**
     * CashRegister name assigned to the reader.
     * @var string
     */
    private string $cashRegister;

    /**
     * True if reader is equiped with scanner, false reader has no scanner.(To avoid starting a scanning script without a scanner)
     * @var bool
     */
    private bool $isScannerPresent;

    /**
     * Transaction number assigned to this read action.
     * @var string
     */
    private string $transactionNumber;

    /**
     * ProgramId that is called, Guid format.
     * @var string
     */
    private string $programId;

    /**
     * OverrideMerchantId if set in portal, to allow to reflect a defined merchantId.
     * @var string|null
     */
    private ?string $overrideMerchantId = null;

    /**
     * OverrideProgramId if set in portal, to allow identifying your program.
     * @var string|null
     */
    private ?string $overrideProgramId = null;

    /**
     * @return int
     */
    public function getProtocolVersion(): int
    {
        return $this->protocolVersion;
    }

    /**
     * @param int $protocolVersion
     * @return ReaderInfo
     */
    public function setProtocolVersion(int $protocolVersion): ReaderInfo
    {
        $this->protocolVersion = $protocolVersion;
        return $this;
    }

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return ReaderInfo
     */
    public function setMerchantId(string $merchantId): ReaderInfo
    {
        $this->merchantId = $merchantId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBranchId(): ?string
    {
        return $this->branchId;
    }

    /**
     * @param string|null $branchId
     * @return ReaderInfo
     */
    public function setBranchId(?string $branchId): ReaderInfo
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIanaTimezoneId(): string
    {
        return $this->ianaTimezoneId;
    }

    /**
     * @param string $ianaTimezoneId
     * @return ReaderInfo
     */
    public function setIanaTimezoneId(string $ianaTimezoneId): ReaderInfo
    {
        $this->ianaTimezoneId = $ianaTimezoneId;
        return $this;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @param string $language
     * @return ReaderInfo
     */
    public function setLanguage(string $language): ReaderInfo
    {
        $this->language = $language;
        return $this;
    }

    /**
     * @return string
     */
    public function getIsoCountry(): string
    {
        return $this->isoCountry;
    }

    /**
     * @param string $isoCountry
     * @return ReaderInfo
     */
    public function setIsoCountry(string $isoCountry): ReaderInfo
    {
        $this->isoCountry = $isoCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getCashRegister(): string
    {
        return $this->cashRegister;
    }

    /**
     * @param string $cashRegister
     * @return ReaderInfo
     */
    public function setCashRegister(string $cashRegister): ReaderInfo
    {
        $this->cashRegister = $cashRegister;
        return $this;
    }

    /**
     * @return bool
     */
    public function isScannerPresent(): bool
    {
        return $this->isScannerPresent;
    }

    /**
     * @param bool $isScannerPresent
     * @return ReaderInfo
     */
    public function setIsScannerPresent(bool $isScannerPresent): ReaderInfo
    {
        $this->isScannerPresent = $isScannerPresent;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumber(): string
    {
        return $this->transactionNumber;
    }

    /**
     * @param string $transactionNumber
     * @return ReaderInfo
     */
    public function setTransactionNumber(string $transactionNumber): ReaderInfo
    {
        $this->transactionNumber = $transactionNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getProgramId(): string
    {
        return $this->programId;
    }

    /**
     * @param string $programId
     * @return ReaderInfo
     */
    public function setProgramId(string $programId): ReaderInfo
    {
        $this->programId = $programId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOverrideMerchantId(): ?string
    {
        return $this->overrideMerchantId;
    }

    /**
     * @param string|null $overrideMerchantId
     * @return ReaderInfo
     */
    public function setOverrideMerchantId(?string $overrideMerchantId): ReaderInfo
    {
        $this->overrideMerchantId = $overrideMerchantId;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getOverrideProgramId(): ?string
    {
        return $this->overrideProgramId;
    }

    /**
     * @param string|null $overrideProgramId
     * @return ReaderInfo
     */
    public function setOverrideProgramId(?string $overrideProgramId): ReaderInfo
    {
        $this->overrideProgramId = $overrideProgramId;
        return $this;
    }
}
