<?php

namespace PhpExample\Models\Requests;

use PhpExample\Models\Data\ConsumerData;

class PostGetBalance extends BaseRequest
{
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
}
