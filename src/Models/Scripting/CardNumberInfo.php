<?php

namespace Bank2Loyalty\Models\Scripting;

use Bank2Loyalty\Models\Enums\CardNumberActions;

class CardNumberInfo extends BaseModel
{
    /**
     * The card number you want to communicate to the consumer
     * @var string
     */
    protected string $cardNumber;

    /**
     * The value of the data
     * @see CardNumberActions
     * @var int
     */
    protected int $cardAction;

    /**
     * @return string
     */
    public function getCardNumber(): string
    {
        return $this->cardNumber;
    }

    /**
     * @param string $cardNumber
     * @return CardNumberInfo
     */
    public function setCardNumber(string $cardNumber): CardNumberInfo
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return int
     */
    public function getCardAction(): int
    {
        return $this->cardAction;
    }

    /**
     * @param int $cardAction
     * @return CardNumberInfo
     */
    public function setCardAction(int $cardAction): CardNumberInfo
    {
        $this->cardAction = $cardAction;
        return $this;
    }
}
