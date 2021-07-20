<?php

namespace Bank2Loyalty\Models\Data;

class ShoppingCartItem
{
    /**
     * barcode of article, typical a EAN13 code or alike
     * @var string|null
     */
    private ?string $barCode = null;

    /**
     * code of article
     * @var string|null
     */
    private ?string $articleCode = null;

    /**
     * Article description
     * @var string
     */
    private string $description;

    /**
     * Number of items bought
     * @var float
     */
    private float $quantity;

    /**
     * Line total amount
     * @var float
     */
    private float $totalLineAmount;

    /**
     * @return string|null
     */
    public function getBarCode(): ?string
    {
        return $this->barCode;
    }

    /**
     * @param string|null $barCode
     * @return ShoppingCartItem
     */
    public function setBarCode(?string $barCode): ShoppingCartItem
    {
        $this->barCode = $barCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getArticleCode(): ?string
    {
        return $this->articleCode;
    }

    /**
     * @param string|null $articleCode
     * @return ShoppingCartItem
     */
    public function setArticleCode(?string $articleCode): ShoppingCartItem
    {
        $this->articleCode = $articleCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ShoppingCartItem
     */
    public function setDescription(string $description): ShoppingCartItem
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return float
     */
    public function getQuantity(): float
    {
        return $this->quantity;
    }

    /**
     * @param float $quantity
     * @return ShoppingCartItem
     */
    public function setQuantity(float $quantity): ShoppingCartItem
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return float
     */
    public function getTotalLineAmount(): float
    {
        return $this->totalLineAmount;
    }

    /**
     * @param float $totalLineAmount
     * @return ShoppingCartItem
     */
    public function setTotalLineAmount(float $totalLineAmount): ShoppingCartItem
    {
        $this->totalLineAmount = $totalLineAmount;
        return $this;
    }
}
