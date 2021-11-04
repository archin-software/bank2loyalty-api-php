<?php

namespace Bank2Loyalty\Models\Scripting;

use Bank2Loyalty\Models\Enums\CardNumberActions;
use DateTime;

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
     * If card needs to be altered on behalf of other programId specify the other programId
     * - The program specified by "otherProgramId" must have the same programOwner, else the command will be ignored.
     * @var string|null
     */
    protected ?string $otherProgramId;

    /**
     * If card has an expirationTime supply it here
     * @var DateTime|null
     */
    protected ?DateTime $expirationTimeUtc;

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

    /**
     * @return string|null
     */
    public function getOtherProgramId(): ?string
    {
        return $this->otherProgramId;
    }

    /**
     * @param string|null $otherProgramId
     * @return CardNumberInfo
     */
    public function setOtherProgramId(?string $otherProgramId): CardNumberInfo
    {
        $this->otherProgramId = $otherProgramId;
        return $this;
    }

    /**
     * @return DateTime|null
     */
    public function getExpirationTimeUtc(): ?DateTime
    {
        return $this->expirationTimeUtc;
    }

    /**
     * @param DateTime|null $expirationTimeUtc
     * @return CardNumberInfo
     */
    public function setExpirationTimeUtc(?DateTime $expirationTimeUtc): CardNumberInfo
    {
        $this->expirationTimeUtc = $expirationTimeUtc;
        return $this;
    }
}
