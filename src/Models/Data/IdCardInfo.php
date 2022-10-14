<?php

namespace Bank2Loyalty\Models\Data;

class IdCardInfo
{
    /**
     * The UUID of the card read (7 hex bytes).
     * @var string
     */
    private string $id;

    /**
     * the isoCountry (iso-3166 alpha-2 code) of the card.
     * @var string
     */
    private string $isoCountry;

    /**
     * The language of the card.
     * @var string
     */
    private string $language;

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     * @return IdCardInfo
     */
    public function setId(string $id): IdCardInfo
    {
        $this->id = $id;
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
     * @return IdCardInfo
     */
    public function setIsoCountry(string $isoCountry): IdCardInfo
    {
        $this->isoCountry = $isoCountry;
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
     * @return IdCardInfo
     */
    public function setLanguage(string $language): IdCardInfo
    {
        $this->language = $language;
        return $this;
    }
}
