<?php

namespace Bank2Loyalty\Models\Data;

class EmvInfo
{
    /**
     * Tokenized pan number of the EMV means (32 hex chars).
     * @var string
     */
    private string $panToken;

    /**
     * par value, can be used to recognize other EMV cards from the same user.
     * @var string|null
     */
    private ?string $par = null;

    /**
     * year being a 4 digit number, for example 2022.
     * @var int
     */
    private int $expiryYear;

    /**
     * month number 1..12 indicating month of year.
     * @var int
     */
    private int $expiryMonth;

    /**
     * Masked pan number according to PCI guidlines.
     * @var string
     */
    private string $truncatedPan;

    /**
     * The brand of the EMV means.
     * @var string
     */
    private string $brand;

    /**
     * the currency of the account representing the PAN number, 3 letter iso.
     * @var string|null
     */
    private ?string $currency = null;

    /**
     * country where the card was issued, iso-3166 alpha-2 code.
     * @var string|null
     */
    private ?string $isoCountry = null;


    /**
     * preferred languages of the card user.
     * @var array|null
     */
    private ?array $cardPreferredLanguages = [];

    /**
     * @return string
     */
    public function getPanToken(): string
    {
        return $this->panToken;
    }

    /**
     * @param string $panToken
     * @return EmvInfo
     */
    public function setPanToken(string $panToken): EmvInfo
    {
        $this->panToken = $panToken;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPar(): ?string
    {
        return $this->par;
    }

    /**
     * @param string|null $par
     * @return EmvInfo
     */
    public function setPar(?string $par): EmvInfo
    {
        $this->par = $par;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiryYear(): int
    {
        return $this->expiryYear;
    }

    /**
     * @param int $expiryYear
     * @return EmvInfo
     */
    public function setExpiryYear(int $expiryYear): EmvInfo
    {
        $this->expiryYear = $expiryYear;
        return $this;
    }

    /**
     * @return int
     */
    public function getExpiryMonth(): int
    {
        return $this->expiryMonth;
    }

    /**
     * @param int $expiryMonth
     * @return EmvInfo
     */
    public function setExpiryMonth(int $expiryMonth): EmvInfo
    {
        $this->expiryMonth = $expiryMonth;
        return $this;
    }

    /**
     * @return string
     */
    public function getTruncatedPan(): string
    {
        return $this->truncatedPan;
    }

    /**
     * @param string $truncatedPan
     * @return EmvInfo
     */
    public function setTruncatedPan(string $truncatedPan): EmvInfo
    {
        $this->truncatedPan = $truncatedPan;
        return $this;
    }

    /**
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }

    /**
     * @param string $brand
     * @return EmvInfo
     */
    public function setBrand(string $brand): EmvInfo
    {
        $this->brand = $brand;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * @param string|null $currency
     * @return EmvInfo
     */
    public function setCurrency(?string $currency): EmvInfo
    {
        $this->currency = $currency;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getIsoCountry(): ?string
    {
        return $this->isoCountry;
    }

    /**
     * @param string|null $isoCountry
     * @return EmvInfo
     */
    public function setIsoCountry(?string $isoCountry): EmvInfo
    {
        $this->isoCountry = $isoCountry;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getCardPreferredLanguages(): ?string
    {
        return $this->cardPreferredLanguages;
    }

    /**
     * @param array|null $cardPreferredLanguages
     * @return EmvInfo
     */
    public function setCardPreferredLanguages(?array $cardPreferredLanguages): EmvInfo
    {
        $this->cardPreferredLanguages = $cardPreferredLanguages;
        return $this;
    }
}
