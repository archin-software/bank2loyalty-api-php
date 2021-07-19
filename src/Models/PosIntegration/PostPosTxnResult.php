<?php

namespace PhpExample\Models\PosIntegration;

use PhpExample\Models\Data\ShoppingCartItem;

class PostPosTxnResult
{
    /**
     * Configured merchantId
     * @var string
     */
    protected string $merchantId;

    /**
     * Configured branchId (if set)
     * @var string|null
     */
    protected ?string $branchId = null;

    /**
     * Transaction number bank2loyalty
     * @var string
     */
    protected string $transactionNumberB2L;

    /**
     * Transaction number of POS
     * @var string
     */
    protected string $transactionNumberPOS;

    /**
     * Total amount paid
     * @var float
     */
    protected float $totalAmount;

    /**
     * 3 letter ISO currency
     * @var string
     */
    protected string $currency;

    /**
     * array of PosTxnProgram information
     * @var PosTxnProgram[]
     */
    protected array $programs = [];

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
     * @return PostPosTxnResult
     */
    public function setMerchantId(string $merchantId): PostPosTxnResult
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
     * @return PostPosTxnResult
     */
    public function setBranchId(?string $branchId): PostPosTxnResult
    {
        $this->branchId = $branchId;
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
     * @return PostPosTxnResult
     */
    public function setTransactionNumberB2L(string $transactionNumberB2L): PostPosTxnResult
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
     * @return PostPosTxnResult
     */
    public function setTransactionNumberPOS(string $transactionNumberPOS): PostPosTxnResult
    {
        $this->transactionNumberPOS = $transactionNumberPOS;
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
     * @return PostPosTxnResult
     */
    public function setTotalAmount(float $totalAmount): PostPosTxnResult
    {
        $this->totalAmount = $totalAmount;
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
     * @return PostPosTxnResult
     */
    public function setCurrency(string $currency): PostPosTxnResult
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return PosTxnProgram[]
     */
    public function getPrograms(): array
    {
        return $this->programs;
    }

    /**
     * @param PosTxnProgram[] $programs
     * @return PostPosTxnResult
     */
    public function setPrograms(array $programs): PostPosTxnResult
    {
        $this->programs = $programs;
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
     * @return PostPosTxnResult
     */
    public function setShoppingCartItems(array $shoppingCartItems): PostPosTxnResult
    {
        $this->shoppingCartItems = $shoppingCartItems;
        return $this;
    }
}
