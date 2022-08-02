<?php

namespace Bank2Loyalty\Models\Data;

class GoogleSmartTapInfo
{
    /**
     * The collectorId of the retrieved (loyalty)card
     * @var int
     */
    protected int $customResponseId;

    /**
     * base64 encoded binary data resprenting the card payload
     * @var string
     */
    protected string $cardPayload;

    /**
     * @return int
     */
    public function getCustomResponseId(): int
    {
        return $this->customResponseId;
    }

    /**
     * @param int $customResponseId
     * @return GoogleSmartTapInfo
     */
    public function setCustomResponseId(int $customResponseId): GoogleSmartTapInfo
    {
        $this->customResponseId = $customResponseId;
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
