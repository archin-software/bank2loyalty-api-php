<?php

namespace Bank2Loyalty\Models\Requests;

use Bank2Loyalty\Models\Data\Bank2LoyaltyInfo;
use Bank2Loyalty\Models\Data\EmvInfo;
use Bank2Loyalty\Models\Data\GoogleSmartTapInfo;
use Bank2Loyalty\Models\Data\IdCardInfo;
use Bank2Loyalty\Models\Data\ProgramScannedInfo;
use Bank2Loyalty\Models\Data\ReaderInfo;
use Bank2Loyalty\Models\Scripting\ScriptActionResults;

class PostScriptResultV3 extends BaseRequestV3
{
    /**
     * Contains info about the reader that send the request.
     * @var ReaderInfo
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
     * Contains info about the bank2loyalty Id card.
     * @var IdCardInfo|null
     */
    protected ?IdCardInfo $idCardInfo = null;

    /**
     * Contains info about the wallet card read.
     * @var GoogleSmartTapInfo|null
     */
    protected ?GoogleSmartTapInfo $googleSmartTapInfo = null;

    /**
     * Script action results from script processing
     * @var ScriptActionResults
     */
    protected ScriptActionResults $scriptActionResults;

    /**
     * @return ReaderInfo
     */
    public function getReaderInfo(): ReaderInfo
    {
        return $this->readerInfo;
    }

    /**
     * @param ReaderInfo $readerInfo
     * @return PostScriptResultV3
     */
    public function setReaderInfo(ReaderInfo $readerInfo): PostScriptResultV3
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
     * @return PostScriptResultV3
     */
    public function setBank2LoyaltyInfo(?Bank2LoyaltyInfo $bank2LoyaltyInfo): PostScriptResultV3
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
     * @return PostScriptResultV3
     */
    public function setEmvInfo(?EmvInfo $emvInfo): PostScriptResultV3
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
     * @return PostScriptResultV3
     */
    public function setProgramScannedInfo(?ProgramScannedInfo $programScannedInfo): PostScriptResultV3
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
     * @return PostScriptResultV3
     */
    public function setIdCardInfo(?IdCardInfo $idCardInfo): PostScriptResultV3
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
     * @return PostScriptResultV3
     */
    public function setGoogleSmartTapInfo(?GoogleSmartTapInfo $googleSmartTapInfo): PostScriptResultV3
    {
        $this->googleSmartTapInfo = $googleSmartTapInfo;
        return $this;
    }

    /**
     * @return ScriptActionResults
     */
    public function getScriptActionResults(): ScriptActionResults
    {
        return $this->scriptActionResults;
    }

    /**
     * @param ScriptActionResults $scriptActionResults
     * @return PostScriptResultV3
     */
    public function setScriptActionResults(ScriptActionResults $scriptActionResults): PostScriptResultV3
    {
        $this->scriptActionResults = $scriptActionResults;
        return $this;
    }
}
