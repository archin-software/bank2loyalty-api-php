<?php

namespace Bank2Loyalty\Models\Enums;

use Elao\Enum\AutoDiscoveredValuesTrait;
use Elao\Enum\Enum;

class IdentificationMeans extends Enum
{
    use AutoDiscoveredValuesTrait;

    /**
     * Bankcard, creditcard, phoneApp or Wearable. Any EMV compatible means is used to identify a consumer
     */
    public const EmvCardOrEquivalent = 0;

    /**
     * A bank2loyalty id card is used to identify a consumer
     */
    public const Bank2LoyaltyIdCard = 1;

    /**
     * A bar or qrcode designated by a specific program is used to identify a consumer.
     */
    public const ProgramScannedCode = 2;

    /**
     * A google SmartTap nfc card has been used to identify a consumer
     */
    public const GoogleSmartTapNfcCard = 3;

    /**
     * A succesfull read of a google smarttap nfc enabled card has been performed
     * No identification is done, the transacton only has GoogleSmartTapInfo data available. ConsumerId, MobieNumber, Consumer will not have a value.
     */
    public const NotIdentifiedGoogleSmartTapNfcCard = 98;

    /**
     * No identification is done, the transaction only has scan information. ConsumerId, MobileNumber, Consumer, CardIsoCountry and CardLanguages will not have a value
     * only ScannedCode and ScannedData have valid data.
     */
    public const NotIdentifiedScanInformationOnly = 99;
}
