<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Data\ConsumerData;
use Bank2Loyalty\Models\Enums\IdentificationMeans;
use Bank2Loyalty\Models\Enums\ScannedCodes;

class PostRequest extends BaseRequest
{
    /**
     * MerchantId of reader, Guid format
     * @var string
     */
    protected string $merchantId;

    /**
     * BranchId of reader if it's a branch, Guid format
     * @var string|null
     */
    protected ?string $branchId = null;

    /**
     * TimeZoneId where reader is located (actually it is the timezoneId of the merchant or branch)
     * @var string
     */
    protected string $ianaTimeZoneId;

    /**
     * Language (2 chars) the reader is communicating in for example "nl" or "en"
     * @var string
     */
    protected string $language;

    /**
     * isoCountry (2 chars) iso country the reader is located in
     * @var string
     */
    protected string $isoCountry;

    /**
     * CashRegister name assigned to the reader
     * @var string
     */
    protected string $cashRegister;

    /**
     * True if reader is equiped with scanner, false reader has no scanner.(To avoid starting a scanning script without
     * a scanner)
     * @var bool
     */
    protected bool $isScannerPresent;

    /**
     * Transaction number (Bank2Loyalty) involved
     * @var string
     */
    protected string $transactionNumber;

    /**
     * Means used for identification of the consumer
     * @var IdentificationMeans
     */
    protected IdentificationMeans $identificationMeans;

    /**
     * OverrideMerchantId if set in portal, to allow to reflect your merchantId
     * @var string|null
     */
    protected ?string $overrideMerchantId = null;

    /**
     * ScannedCode type of scanned data
     * @see ScannedCodes
     * @var int|null
     */
    protected ?int $scannedCode = null;

    /**
     * Code that has been scanned
     * @var string|null
     */
    protected ?string $scannedData = null;

    /**
     * Mobile number of identified consumer
     * @var string|null
     */
    protected ?string $mobileNumber = null;

    /**
     * ConsumerId of identified consumer
     * @var string|null
     */
    protected ?string $consumerId = null;

    /**
     * Additional consumer info if the consumer has added data to the account. (isoCountry is always present)
     * @var ConsumerData|null
     */
    protected ?ConsumerData $consumerData = null;

    /**
     * Preferred languages of the bankcard
     * @var string[]
     */
    protected array $cardPreferredLanguages = [];

    /**
     * Optional list of programCardNumbers you have supplied to store for the consumer
     * @var string[]
     */
    protected array $programCardNumbers = [];

    /**
     * isoCountry where the bankcard was produced
     * @var string
     */
    protected string $cardIsoCountry;

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return PostRequest
     */
    public function setMerchantId(string $merchantId): PostRequest
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
     * @return PostRequest
     */
    public function setBranchId(?string $branchId): PostRequest
    {
        $this->branchId = $branchId;
        return $this;
    }

    /**
     * @return string
     */
    public function getIanaTimeZoneId(): string
    {
        return $this->ianaTimeZoneId;
    }

    /**
     * @param string $ianaTimeZoneId
     * @return PostRequest
     */
    public function setIanaTimeZoneId(string $ianaTimeZoneId): PostRequest
    {
        $this->ianaTimeZoneId = $ianaTimeZoneId;
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
     * @return PostRequest
     */
    public function setLanguage(string $language): PostRequest
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
     * @return PostRequest
     */
    public function setIsoCountry(string $isoCountry): PostRequest
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
     * @return PostRequest
     */
    public function setCashRegister(string $cashRegister): PostRequest
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
     * @return PostRequest
     */
    public function setIsScannerPresent(bool $isScannerPresent): PostRequest
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
     * @return PostRequest
     */
    public function setTransactionNumber(string $transactionNumber): PostRequest
    {
        $this->transactionNumber = $transactionNumber;
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
     * @return PostRequest
     */
    public function setOverrideMerchantId(?string $overrideMerchantId): PostRequest
    {
        $this->overrideMerchantId = $overrideMerchantId;
        return $this;
    }

    /**
     * @return int|null
     */
    public function getScannedCode(): ?int
    {
        return $this->scannedCode;
    }

    /**
     * @param int|null $scannedCode
     * @return PostRequest
     */
    public function setScannedCode(?int $scannedCode): PostRequest
    {
        $this->scannedCode = $scannedCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getScannedData(): ?string
    {
        return $this->scannedData;
    }

    /**
     * @param string|null $scannedData
     * @return PostRequest
     */
    public function setScannedData(?string $scannedData): PostRequest
    {
        $this->scannedData = $scannedData;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getMobileNumber(): ?string
    {
        return $this->mobileNumber;
    }

    /**
     * @param string|null $mobileNumber
     * @return PostRequest
     */
    public function setMobileNumber(?string $mobileNumber): PostRequest
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getConsumerId(): ?string
    {
        return $this->consumerId;
    }

    /**
     * @param string|null $consumerId
     * @return PostRequest
     */
    public function setConsumerId(?string $consumerId): PostRequest
    {
        $this->consumerId = $consumerId;
        return $this;
    }

    /**
     * @return ConsumerData|null
     */
    public function getConsumerData(): ?ConsumerData
    {
        return $this->consumerData;
    }

    /**
     * @param ConsumerData|null $consumerData
     * @return PostRequest
     */
    public function setConsumerData(?ConsumerData $consumerData): PostRequest
    {
        $this->consumerData = $consumerData;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getCardPreferredLanguages(): array
    {
        return $this->cardPreferredLanguages;
    }

    /**
     * @param string[] $cardPreferredLanguages
     * @return PostRequest
     */
    public function setCardPreferredLanguages(array $cardPreferredLanguages): PostRequest
    {
        $this->cardPreferredLanguages = $cardPreferredLanguages;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getProgramCardNumbers(): array
    {
        return $this->programCardNumbers;
    }

    /**
     * @param string[] $programCardNumbers
     * @return PostRequest
     */
    public function setProgramCardNumbers(array $programCardNumbers): PostRequest
    {
        $this->programCardNumbers = $programCardNumbers;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardIsoCountry(): string
    {
        return $this->cardIsoCountry;
    }

    /**
     * @param string $cardIsoCountry
     * @return PostRequest
     */
    public function setCardIsoCountry(string $cardIsoCountry): PostRequest
    {
        $this->cardIsoCountry = $cardIsoCountry;
        return $this;
    }

    /**
     * @return IdentificationMeans
     */
    public function getIdentificationMeans(): IdentificationMeans
    {
        return $this->identificationMeans;
    }

    /**
     * @param IdentificationMeans $identificationMeans
     * @return PostRequest
     */
    public function setIdentificationMeans(IdentificationMeans $identificationMeans): PostRequest
    {
        $this->identificationMeans = $identificationMeans;
        return $this;
    }
}
