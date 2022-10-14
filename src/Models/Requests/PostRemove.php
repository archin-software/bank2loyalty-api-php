<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Data\ConsumerData;

class PostRemove
{
    /**
     * Current version of request.
     * @var int
     */
    protected int $protocolVersion;

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

    /**
     * @return int
     */
    public function getProtocolVersion(): int
    {
        return $this->protocolVersion;
    }

    /**
     * @param int $protocolVersion
     * @return PostRemove
     */
    public function setProtocolVersion(int $protocolVersion): PostRemove
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
     * @return PostRemove
     */
    public function setProgramId(string $programId): PostRemove
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
     * @return PostRemove
     */
    public function setOverrideProgramId(?string $overrideProgramId): PostRemove
    {
        $this->overrideProgramId = $overrideProgramId;
        return $this;
    }
}
