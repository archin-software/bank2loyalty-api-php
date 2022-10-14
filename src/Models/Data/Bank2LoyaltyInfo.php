<?php

namespace Bank2Loyalty\Models\Data;

use DateTime;

class Bank2LoyaltyInfo
{
    /**
     * unique consumer id.
     * @var string
     */
    private string $consumerId;

    /**
     * mobile number of consumer in E164 international format.
     * @var string
     */
    private string $mobileNumber;

    /**
     * Last time the consumer updated data
     * @var DateTime
     */
    private DateTime $lastUpdateTimeUtc;

    /**
     * email address.
     * @var string|null
     */
    private ?string $email = null;

    /**
     * if supplied contains true = male or false = female
     * @var bool|null
     */
    private ?bool $isMale = null;

    /**
     * first name
     * @var string|null
     */
    private ?string $firstName = null;

    /**
     * last name
     * @var string|null
     */
    private ?string $lastName = null;

    /**
     * address line 1 of formatted address
     * @var string|null
     */
    private ?string $addressLine1 = null;

    /**
     * address line 2 of formatted address
     * @var string|null
     */
    private ?string $addressLine2 = null;

    /**
     * address line 3 of formatted address
     * @var string|null
     */
    private ?string $addressLine3 = null;

    /**
     * address line 4 of formatted address
     * @var string|null
     */
    private ?string $addressLine4 = null;

    /**
     * address line 5 of formatted address
     * @var string|null
     */
    private ?string $addressLine5 = null;

    /**
     * address line 6 of formatted address
     * @var string|null
     */
    private ?string $addressLine6 = null;

    /**
     * postal code.
     * @var string|null
     */
    private ?string $postalCode = null;

    /**
     * city.
     * @var string|null
     */
    private ?string $city = null;

    /**
     * two letter isoCountry code (iso-3166 alpha-2 code).
     * @var string
     */
    private string $isoCountry;

    /**
     * two letter language iso code of the language selected during registration.
     * @var string
     */
    private string $registrationLanguage;

    /**
     * Iso8601 formatted date YYYY-MM-DD
     * @var string|null
     */
    private ?string $birthDate = null;

    /**
     * Name of business of consumer.
     * @var string|null
     */
    private ?string $businessName = null;

    /**
     * Job title of consumer.
     * @var string|null
     */
    private ?string $jobTitle = null;

    /**
     * Program cards stored for the consumer.
     * @var string[]|null
     */
    private ?array $programCardNumbers;

    /**
     * @return string
     */
    public function getConsumerId(): string
    {
        return $this->consumerId;
    }

    /**
     * @param string $consumerId
     * @return Bank2LoyaltyInfo
     */
    public function setConsumerId(string $consumerId): Bank2LoyaltyInfo
    {
        $this->consumerId = $consumerId;
        return $this;
    }

    /**
     * @return string
     */
    public function getMobileNumber(): string
    {
        return $this->mobileNumber;
    }

    /**
     * @param string $mobileNumber
     * @return Bank2LoyaltyInfo
     */
    public function setMobileNumber(string $mobileNumber): Bank2LoyaltyInfo
    {
        $this->mobileNumber = $mobileNumber;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getLastUpdateTimeUtc(): DateTime
    {
        return $this->lastUpdateTimeUtc;
    }

    /**
     * @param DateTime $lastUpdateTimeUtc
     * @return Bank2LoyaltyInfo
     */
    public function setLastUpdateTimeUtc(DateTime $lastUpdateTimeUtc): Bank2LoyaltyInfo
    {
        $this->lastUpdateTimeUtc = $lastUpdateTimeUtc;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * @param string|null $email
     * @return Bank2LoyaltyInfo
     */
    public function setEmail(?string $email): Bank2LoyaltyInfo
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return bool|null
     */
    public function getIsMale(): ?bool
    {
        return $this->isMale;
    }

    /**
     * @param bool|null $isMale
     * @return Bank2LoyaltyInfo
     */
    public function setIsMale(?bool $isMale): Bank2LoyaltyInfo
    {
        $this->isMale = $isMale;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getFirstName(): ?string
    {
        return $this->firstName;
    }

    /**
     * @param string|null $firstName
     * @return Bank2LoyaltyInfo
     */
    public function setFirstName(?string $firstName): Bank2LoyaltyInfo
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getLastName(): ?string
    {
        return $this->lastName;
    }

    /**
     * @param string|null $lastName
     * @return Bank2LoyaltyInfo
     */
    public function setLastName(?string $lastName): Bank2LoyaltyInfo
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine1(): ?string
    {
        return $this->addressLine1;
    }

    /**
     * @param string|null $addressLine1
     * @return Bank2LoyaltyInfo
     */
    public function setAddressLine1(?string $addressLine1): Bank2LoyaltyInfo
    {
        $this->addressLine1 = $addressLine1;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine2(): ?string
    {
        return $this->addressLine2;
    }

    /**
     * @param string|null $addressLine2
     * @return Bank2LoyaltyInfo
     */
    public function setAddressLine2(?string $addressLine2): Bank2LoyaltyInfo
    {
        $this->addressLine2 = $addressLine2;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine3(): ?string
    {
        return $this->addressLine3;
    }

    /**
     * @param string|null $addressLine3
     * @return Bank2LoyaltyInfo
     */
    public function setAddressLine3(?string $addressLine3): Bank2LoyaltyInfo
    {
        $this->addressLine3 = $addressLine3;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine4(): ?string
    {
        return $this->addressLine4;
    }

    /**
     * @param string|null $addressLine4
     * @return Bank2LoyaltyInfo
     */
    public function setAddressLine4(?string $addressLine4): Bank2LoyaltyInfo
    {
        $this->addressLine4 = $addressLine4;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine5(): ?string
    {
        return $this->addressLine5;
    }

    /**
     * @param string|null $addressLine5
     * @return Bank2LoyaltyInfo
     */
    public function setAddressLine5(?string $addressLine5): Bank2LoyaltyInfo
    {
        $this->addressLine5 = $addressLine5;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getAddressLine6(): ?string
    {
        return $this->addressLine6;
    }

    /**
     * @param string|null $addressLine6
     * @return Bank2LoyaltyInfo
     */
    public function setAddressLine6(?string $addressLine6): Bank2LoyaltyInfo
    {
        $this->addressLine6 = $addressLine6;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getPostalCode(): ?string
    {
        return $this->postalCode;
    }

    /**
     * @param string|null $postalCode
     * @return Bank2LoyaltyInfo
     */
    public function setPostalCode(?string $postalCode): Bank2LoyaltyInfo
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getCity(): ?string
    {
        return $this->city;
    }

    /**
     * @param string|null $city
     * @return Bank2LoyaltyInfo
     */
    public function setCity(?string $city): Bank2LoyaltyInfo
    {
        $this->city = $city;
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
     * @return Bank2LoyaltyInfo
     */
    public function setIsoCountry(string $isoCountry): Bank2LoyaltyInfo
    {
        $this->isoCountry = $isoCountry;
        return $this;
    }

    /**
     * @return string
     */
    public function getRegistrationLanguage(): string
    {
        return $this->registrationLanguage;
    }

    /**
     * @param string $registrationLanguage
     * @return Bank2LoyaltyInfo
     */
    public function setRegistrationLanguage(string $registrationLanguage): Bank2LoyaltyInfo
    {
        $this->registrationLanguage = $registrationLanguage;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBirthDate(): ?string
    {
        return $this->birthDate;
    }

    /**
     * @param string|null $birthDate
     * @return Bank2LoyaltyInfo
     */
    public function setBirthDate(?string $birthDate): Bank2LoyaltyInfo
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getBusinessName(): ?string
    {
        return $this->businessName;
    }

    /**
     * @param string|null $businessName
     * @return Bank2LoyaltyInfo
     */
    public function setBusinessName(?string $businessName): Bank2LoyaltyInfo
    {
        $this->businessName = $businessName;
        return $this;
    }

    /**
     * @return string|null
     */
    public function getJobTitle(): ?string
    {
        return $this->jobTitle;
    }

    /**
     * @param string|null $jobTitle
     * @return Bank2LoyaltyInfo
     */
    public function setJobTitle(?string $jobTitle): Bank2LoyaltyInfo
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }

    /**
     * @return array|null
     */
    public function getProgramCardNumbers(): ?array
    {
        return $this->programCardNumbers;
    }

    /**
     * @param array|null $programCardNumbers
     * @return Bank2LoyaltyInfo
     */
    public function setProgramCardNumbers(?array $programCardNumbers): Bank2LoyaltyInfo
    {
        $this->programCardNumbers = $programCardNumbers;
        return $this;
    }
}
