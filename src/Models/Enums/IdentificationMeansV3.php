<?php

namespace Bank2Loyalty\Models\Enums;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

class IdentificationMeansV3 extends Enum
{
    use AutoDiscoveredValuesTrait;

    /**
     * A succesfull read of an EMV card or equivalent.
     * No associated Bank2loyalty account found, EmvInfo is populated.
     */
    public const EmvCardOrEquivalent = 95;

    /**
     * A succesfull read of a google smarttap nfc enabled card has been performed.
     * No associated Bank2loyalty account found, GoogleSmartTapInfo is populated.
     */
    public const constGoogleSmartTapNfcCard = 98;

    /**
     * A succesfull scan with the scanner has been performed.
     * No Associated Bank2loyalty account found, ProgramScanInfo is populated.
     */
    public const ProgramScannedCode = 99;

    /**
     * A succesfull read of an EMV card or equivalent is performend.
     * The user has a Bank2loyaltyAccount so EmvInfo and Bank2LoyaltyInfo is populated.
     */
    public const EmvCardOrEquivalentBank2LoyaltyRegistered = 0;

    /**
     * A bank2loyalty id card is used to identify a consumer.
     * Bank2loyaltyInfo is populated
     */
    public const Bank2LoyaltyIdCard = 1;

    /**
     * A succesfull scan with the scanner has been performed.
     * The user has a bank2loyalty account, Bank2LoyaltyInfo and ProgramScanInfo are populated.
     */
    public const ProgramScannedCodeBank2LoyaltyRegistered = 2;

    /**
     * A succesfull read of a google smarttap nfc enabled card has been performed.
     * The user has a bank2loyalty account, Bank2LoyaltyInfo and GoogleSmartTapInfo are populated.
     */
    public const GoogleSmartTapNfcCardBank2LoyaltyRegistered = 2;
}
