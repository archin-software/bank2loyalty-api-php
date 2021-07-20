<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Data\ShoppingCartItem;
use Bank2Loyalty\Models\Enums\ScannedCodes;

class PostPosTransaction extends BaseRequest
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
     * OverrideMerchantId if set in portal, to allow to reflect your merchantId
     * @var string|null
     */
    protected ?string $overrideMerchantId = null;

    /**
     * ConsumerId of identified consumer
     * @var string|null
     */
    protected ?string $consumerId = null;

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
     * if a card number is stored with this program for this consumer, it is filled
     * @var string
     */
    protected string $cardNumber;

    /**
     * transaction number B2L
     * @var string
     */
    protected string $transactionNumberB2L;

    /**
     * transaction number POS, could also point to a receipt number
     * @var string
     */
    protected string $transactionNumberPOS;

    /**
     * currency 3-letter currency
     * @var string
     */
    protected string $currency;

    /**
     * the txn amount
     * @var float
     */
    protected float $totalAmount;

    /**
     * all received pos commands during the transaction
     * @var string[]
     */
    protected array $posCommands = [];

    /**
     * List of cartItems bought by consumer
     * @var ShoppingCartItem[]
     */
    protected array $shoppingCartItems = [];

    /**
     * @return string
     */
    public function getMerchantId(): string
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return PostPosTransaction
     */
    public function setMerchantId(string $merchantId): PostPosTransaction
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
     * @return PostPosTransaction
     */
    public function setBranchId(?string $branchId): PostPosTransaction
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
     * @return PostPosTransaction
     */
    public function setIanaTimeZoneId(string $ianaTimeZoneId): PostPosTransaction
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
     * @return PostPosTransaction
     */
    public function setLanguage(string $language): PostPosTransaction
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
     * @return PostPosTransaction
     */
    public function setIsoCountry(string $isoCountry): PostPosTransaction
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
     * @return PostPosTransaction
     */
    public function setCashRegister(string $cashRegister): PostPosTransaction
    {
        $this->cashRegister = $cashRegister;
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
     * @return PostPosTransaction
     */
    public function setOverrideMerchantId(?string $overrideMerchantId): PostPosTransaction
    {
        $this->overrideMerchantId = $overrideMerchantId;
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
     * @return PostPosTransaction
     */
    public function setConsumerId(?string $consumerId): PostPosTransaction
    {
        $this->consumerId = $consumerId;
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
     * @return PostPosTransaction
     */
    public function setScannedCode(?int $scannedCode): PostPosTransaction
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
     * @return PostPosTransaction
     */
    public function setScannedData(?string $scannedData): PostPosTransaction
    {
        $this->scannedData = $scannedData;
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
     * @return PostPosTransaction
     */
    public function setCardNumber(string $cardNumber): PostPosTransaction
    {
        $this->cardNumber = $cardNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumberB2L(): string
    {
        return $this->transactionNumberB2L;
    }

    /**
     * @param string $transactionNumberB2L
     * @return PostPosTransaction
     */
    public function setTransactionNumberB2L(string $transactionNumberB2L): PostPosTransaction
    {
        $this->transactionNumberB2L = $transactionNumberB2L;
        return $this;
    }

    /**
     * @return string
     */
    public function getTransactionNumberPOS(): string
    {
        return $this->transactionNumberPOS;
    }

    /**
     * @param string $transactionNumberPOS
     * @return PostPosTransaction
     */
    public function setTransactionNumberPOS(string $transactionNumberPOS): PostPosTransaction
    {
        $this->transactionNumberPOS = $transactionNumberPOS;
        return $this;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return PostPosTransaction
     */
    public function setCurrency(string $currency): PostPosTransaction
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalAmount(): float
    {
        return $this->totalAmount;
    }

    /**
     * @param float $totalAmount
     * @return PostPosTransaction
     */
    public function setTotalAmount(float $totalAmount): PostPosTransaction
    {
        $this->totalAmount = $totalAmount;
        return $this;
    }

    /**
     * @return string[]
     */
    public function getPosCommands(): array
    {
        return $this->posCommands;
    }

    /**
     * @param string[] $posCommands
     * @return PostPosTransaction
     */
    public function setPosCommands(array $posCommands): PostPosTransaction
    {
        $this->posCommands = $posCommands;
        return $this;
    }

    /**
     * @return ShoppingCartItem[]
     */
    public function getShoppingCartItems(): array
    {
        return $this->shoppingCartItems;
    }

    /**
     * @param ShoppingCartItem[] $shoppingCartItems
     * @return PostPosTransaction
     */
    public function setShoppingCartItems(array $shoppingCartItems): PostPosTransaction
    {
        $this->shoppingCartItems = $shoppingCartItems;
        return $this;
    }
}
