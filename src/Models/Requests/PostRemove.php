<?php

namespace PhpExample\Models\Requests;

use PhpExample\Models\Data\ConsumerData;

class PostRemove extends BaseRequest
{
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
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     * @return PostRemove
     */
    public function setMobileNumber(string $mobileNumber): PostRemove
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
     * @return PostRemove
     */
    public function setConsumerId(string $consumerId): PostRemove
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
     * @return PostRemove
     */
    public function setConsumerData(ConsumerData $consumerData): PostRemove
    {
        $this->consumerData = $consumerData;
        return $this;
    }
}
