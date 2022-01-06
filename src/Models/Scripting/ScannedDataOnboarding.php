<?php

namespace Bank2Loyalty\Models\Scripting;

class ScannedDataOnboarding extends BaseModel
{
    /**
     * IsoCountry code of the mobile number of the consumer that gets onboarded. This country code will be used when entering the mobile number.
     * The mobile number will be entered in local format
     * @var string
     */
    protected string $isoCountry;

    /**
     * At least one language should be specified. This should contain the preferred languages of the user to onboard.
     * @var string[]
     */
    protected array $preferredLanguages = [];

    /**
     * @return string
     */
    public function getIsoCountry(): string
    {
        return $this->isoCountry;
    }

    /**
     * @param string $isoCountry
     */
    public function setIsoCountry(string $isoCountry): void
    {
        $this->isoCountry = $isoCountry;
    }

    /**
     * @return string[]
     */
    public function getPreferredLanguages(): array
    {
        return $this->preferredLanguages;
    }

    /**
     * @param string[] $preferredLanguages
     */
    public function setPreferredLanguages(array $preferredLanguages): void
    {
        $this->preferredLanguages = $preferredLanguages;
    }
}
