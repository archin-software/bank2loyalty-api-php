<?php

namespace Bank2Loyalty\Models\Data;

class GoogleSmartTapInfo
{
    /**
     * The collectorId of the retrieved (loyalty)card
     * @var int
     */
    protected int $collectorId;

    /**
     * base64 encoded binary data resprenting the card payload
     * @var string
     */
    protected string $cardPayload;

    /**
     * @return int
     */
    public function getCollectorId(): int
    {
        return $this->collectorId;
    }

    /**
     * @param int $collectorId
     * @return GoogleSmartTapInfo
     */
    public function setCollectorId(int $collectorId): GoogleSmartTapInfo
    {
        $this->collectorId = $collectorId;
        return $this;
    }

    /**
     * @return string
     */
    public function getCardPayload(): string
    {
        return $this->cardPayload;
    }

    /**
     * @param string $cardPayload
     * @return GoogleSmartTapInfo
     */
    public function setCardPayload(string $cardPayload): GoogleSmartTapInfo
    {
        $this->cardPayload = $cardPayload;
        return $this;
    }
}
