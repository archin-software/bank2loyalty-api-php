<?php

namespace Bank2Loyalty\Models\Data;

use DateTime;

class ConsumerData
{
    /**
     * Last time the consumer updated data
     * @var DateTime|null
     */
    private ?DateTime $lastUpdateTimeUtc = null;

    /**
     * email address
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
     * postal code
     * @var string|null
     */
    private ?string $postalCode = null;

    /**
     * city
     * @var string|null
     */
    private ?string $city = null;

    /**
     * two letter isoCountry code
     * @var string|null
     */
    private ?string $isoCountry = null;

    /**
     * Iso8601 formatted date YYYY-MM-DD
     * @var string|null
     */
    private ?string $birthDate = null;

    /**
     * Name of business of consumer
     * @var string|null
     */
    private ?string $businessName = null;

    /**
     * Job title of consumer
     * @var string|null
     */
    private ?string $jobTitle = null;

    /**
     * @return DateTime|null
     */
    public function getLastUpdateTimeUtc(): ?DateTime
    {
        return $this->lastUpdateTimeUtc;
    }

    /**
     * @param DateTime|null $lastUpdateTimeUtc
     * @return ConsumerData
     */
    public function setLastUpdateTimeUtc(?DateTime $lastUpdateTimeUtc): ConsumerData
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
     * @return ConsumerData
     */
    public function setEmail(?string $email): ConsumerData
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
     * @return ConsumerData
     */
    public function setIsMale(?bool $isMale): ConsumerData
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
     * @return ConsumerData
     */
    public function setFirstName(?string $firstName): ConsumerData
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
     * @return ConsumerData
     */
    public function setLastName(?string $lastName): ConsumerData
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
     * @return ConsumerData
     */
    public function setAddressLine1(?string $addressLine1): ConsumerData
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
     * @return ConsumerData
     */
    public function setAddressLine2(?string $addressLine2): ConsumerData
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
     * @return ConsumerData
     */
    public function setAddressLine3(?string $addressLine3): ConsumerData
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
     * @return ConsumerData
     */
    public function setAddressLine4(?string $addressLine4): ConsumerData
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
     * @return ConsumerData
     */
    public function setAddressLine5(?string $addressLine5): ConsumerData
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
     * @return ConsumerData
     */
    public function setAddressLine6(?string $addressLine6): ConsumerData
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
     * @return ConsumerData
     */
    public function setPostalCode(?string $postalCode): ConsumerData
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
     * @return ConsumerData
     */
    public function setCity(?string $city): ConsumerData
    {
        $this->city = $city;
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
     * @return ConsumerData
     */
    public function setIsoCountry(?string $isoCountry): ConsumerData
    {
        $this->isoCountry = $isoCountry;
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
     * @return ConsumerData
     */
    public function setBirthDate(?string $birthDate): ConsumerData
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
     * @return ConsumerData
     */
    public function setBusinessName(?string $businessName): ConsumerData
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
     * @return ConsumerData
     */
    public function setJobTitle(?string $jobTitle): ConsumerData
    {
        $this->jobTitle = $jobTitle;
        return $this;
    }
}
