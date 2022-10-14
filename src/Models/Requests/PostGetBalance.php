<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Data\ConsumerData;

class PostGetBalance
{
    /**
     * Current version of request
     * @var int
     */
    protected int $protocolVersion;

    /**
     * TimeZoneId of consumer
     * @var string
     */
    protected string $ianaTimeZoneId;

    /**
     * Language (2 chars) of the consumer for example "nl" or "en"
     * @var string
     */
    protected string $language;

    /**
     * isoCountry (2 chars) if the consumer
     * @var string
     */
    protected string $isoCountry;

    /**
     * ProgramId that is called, Guid format
     * @var string
     */
    protected string $programId;

    /**
     * OverrideProgramId if set in portal, to allow identifying your program
     * @var string|null
     */
    protected ?string $overrideProgramId = null;

    /**
     * Mobile number of identified consumer
     * @var string
     */
    protected string $mobileNumber;

    /**
     * ConsumerId of identified consumer
     * @var string
     */
    protected string $consumerId;

    /**
     * Additional consumer info if the consumer has added data to the account. (isoCountry is always present)
     * @var ConsumerData
     */
    protected ConsumerData $consumerData;

    /**
     * The card number where the balance is requisted for
     * @var string
     */
    protected string $cardNumber;

    /**
     * @return string
     */
    public function getIanaTimeZoneId(): string
    {
        return $this->ianaTimeZoneId;
    }

    /**
     * @param string $ianaTimeZoneId
     * @return PostGetBalance
     */
    public function setIanaTimeZoneId(string $ianaTimeZoneId): PostGetBalance
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
     * @return PostGetBalance
     */
    public function setLanguage(string $language): PostGetBalance
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
     * @return PostGetBalance
     */
    public function setIsoCountry(string $isoCountry): PostGetBalance
    {
        $this->isoCountry = $isoCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     * @return PostGetBalance
     */
    public function setMobileNumber(string $mobileNumber): PostGetBalance
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getConsumerId(): string
    {
        return $this->consumerId;
    }

    /**
     * @param string $consumerId
     * @return PostGetBalance
     */
    public function setConsumerId(string $consumerId): PostGetBalance
    {
        $this->consumerId = $consumerId;
        return $this;
    }

    /**
     * @return ConsumerData
     */
    public function getConsumerData(): ConsumerData
    {
        return $this->consumerData;
    }

    /**
     * @param ConsumerData $consumerData
     * @return PostGetBalance
     */
    public function setConsumerData(ConsumerData $consumerData): PostGetBalance
    {
        $this->consumerData = $consumerData;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return PostGetBalance
     */
    public function setCardNumber(string $cardNumber): PostGetBalance
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getProtocolVersion(): int
    {
        return $this->protocolVersion;
    }

    /**
     * @param int $protocolVersion
     * @return PostGetBalance
     */
    public function setProtocolVersion(int $protocolVersion): PostGetBalance
    {
        $this->protocolVersion = $protocolVersion;
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
     * @return PostGetBalance
     */
    public function setProgramId(string $programId): PostGetBalance
    {
        $this->programId = $programId;
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
     * @return PostGetBalance
     */
    public function setOverrideProgramId(?string $overrideProgramId): PostGetBalance
    {
        $this->overrideProgramId = $overrideProgramId;
        return $this;
    }
}
