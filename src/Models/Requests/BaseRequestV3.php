<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Data\Bank2LoyaltyInfo;
use Bank2Loyalty\Models\Data\EmvInfo;
use Bank2Loyalty\Models\Data\GoogleSmartTapInfo;
use Bank2Loyalty\Models\Data\IdCardInfo;
use Bank2Loyalty\Models\Data\ProgramScannedInfo;
use Bank2Loyalty\Models\Data\ReaderInfo;
use Bank2Loyalty\Models\Enums\IdentificationMeansV3;

abstract class BaseRequestV3
{
    /**
     * Means used for identification of the consumer.
     * @see IdentificationMeansV3
     * @var int
     */
    protected int $identificationMeansV3;

    /**
     * Contains info about the reader that send the request.
     * @var ReaderInfo $readerInfo
     */
    protected ReaderInfo $readerInfo;

    /**
     * Contains info about the associated bank2loyalty account.
     * @var Bank2LoyaltyInfo|null
     */
    protected ?Bank2LoyaltyInfo $bank2LoyaltyInfo = null;

    /**
     * Contains info about the Emv means that has been read.
     * @var EmvInfo|null
     */
    protected ?EmvInfo $emvInfo = null;

    /**
     * Contains info about info the optical scanner has read.
     * @var ProgramScannedInfo|null
     */
    protected ?ProgramScannedInfo $programScannedInfo = null;

    /**
     * Contains info about info the optical scanner has read.
     * @var IdCardInfo|null
     */
    protected ?IdCardInfo $idCardInfo = null;

    /**
     * Contains info about the wallet card read.
     * @var GoogleSmartTapInfo|null
     */
    protected ?GoogleSmartTapInfo $googleSmartTapInfo = null;

    /**
     * @return int
     */
    public function getIdentificationMeansV3(): int
    {
        return $this->identificationMeansV3;
    }

    /**
     * @param int $identificationMeansV3
     * @return BaseRequestV3
     */
    public function setIdentificationMeansV3(int $identificationMeansV3): BaseRequestV3
    {
        $this->identificationMeansV3 = $identificationMeansV3;
        return $this;
    }

    /**
     * @return ReaderInfo
     */
    public function getReaderInfo(): ReaderInfo
    {
        return $this->readerInfo;
    }

    /**
     * @param ReaderInfo $readerInfo
     * @return BaseRequestV3
     */
    public function setReaderInfo(ReaderInfo $readerInfo): BaseRequestV3
    {
        $this->readerInfo = $readerInfo;
        return $this;
    }

    /**
     * @return Bank2LoyaltyInfo|null
     */
    public function getBank2LoyaltyInfo(): ?Bank2LoyaltyInfo
    {
        return $this->bank2LoyaltyInfo;
    }

    /**
     * @param Bank2LoyaltyInfo|null $bank2LoyaltyInfo
     * @return BaseRequestV3
     */
    public function setBank2LoyaltyInfo(?Bank2LoyaltyInfo $bank2LoyaltyInfo): BaseRequestV3
    {
        $this->bank2LoyaltyInfo = $bank2LoyaltyInfo;
        return $this;
    }

    /**
     * @return EmvInfo|null
     */
    public function getEmvInfo(): ?EmvInfo
    {
        return $this->emvInfo;
    }

    /**
     * @param EmvInfo|null $emvInfo
     * @return BaseRequestV3
     */
    public function setEmvInfo(?EmvInfo $emvInfo): BaseRequestV3
    {
        $this->emvInfo = $emvInfo;
        return $this;
    }

    /**
     * @return ProgramScannedInfo|null
     */
    public function getProgramScannedInfo(): ?ProgramScannedInfo
    {
        return $this->programScannedInfo;
    }

    /**
     * @param ProgramScannedInfo|null $programScannedInfo
     * @return BaseRequestV3
     */
    public function setProgramScannedInfo(?ProgramScannedInfo $programScannedInfo): BaseRequestV3
    {
        $this->programScannedInfo = $programScannedInfo;
        return $this;
    }

    /**
     * @return IdCardInfo|null
     */
    public function getIdCardInfo(): ?IdCardInfo
    {
        return $this->idCardInfo;
    }

    /**
     * @param IdCardInfo|null $idCardInfo
     * @return BaseRequestV3
     */
    public function setIdCardInfo(?IdCardInfo $idCardInfo): BaseRequestV3
    {
        $this->idCardInfo = $idCardInfo;
        return $this;
    }

    /**
     * @return GoogleSmartTapInfo|null
     */
    public function getGoogleSmartTapInfo(): ?GoogleSmartTapInfo
    {
        return $this->googleSmartTapInfo;
    }

    /**
     * @param GoogleSmartTapInfo|null $googleSmartTapInfo
     * @return BaseRequestV3
     */
    public function setGoogleSmartTapInfo(?GoogleSmartTapInfo $googleSmartTapInfo): BaseRequestV3
    {
        $this->googleSmartTapInfo = $googleSmartTapInfo;
        return $this;
    }
}
