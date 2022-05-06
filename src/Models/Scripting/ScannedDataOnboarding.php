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
     * Some data you want to be transport to an onboarding url. This data can be passed by a query parameter in the url by the keyword "customData"
     * @var string|null
     */
    protected ?string $customData = null;

    /**
     * @return string
     */
    public function getIsoCountry(): string
    {
        return $this->isoCountry;
    }

    /**
     * @param string $isoCountry
     * @return ScannedDataOnboarding
     */
    public function setIsoCountry(string $isoCountry): ScannedDataOnboarding
    {
        $this->isoCountry = $isoCountry;
        return $this;
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
     * @return ScannedDataOnboarding
     */
    public function setPreferredLanguages(array $preferredLanguages): ScannedDataOnboarding
    {
        $this->preferredLanguages = $preferredLanguages;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCustomData(): ?string
    {
        return $this->customData;
    }

    /**
     * @param string|null $customData
     * @return ScannedDataOnboarding
     */
    public function setCustomData(?string $customData): ScannedDataOnboarding
    {
        $this->customData = $customData;
        return $this;
    }
}
