<?php

namespace Bank2Loyalty\Models\Enums;

use Elao\Enum\FlaggedEnum;

class ScanTypes extends FlaggedEnum
{
    /**
     * The scanner will recognize nothing
     */
    public const Disabled = 0;

    /**
     * Recognize all (not recommended because this adversly affects scan performance)
     */
    public const All = 0xffffffff;

    /**
     * Will scan all popular bar and qr-codes
     */
    public const Default = self::CodaBar
        | self::Code39
        | self::Code93
        | self::UPCA
        | self::UPCE0
        | self::UPCE1
        | self::EAN13 | self::EAN8
        | self::Code128
        | self::QR
        | self::DataMatrix
        | self::PDF417;

    public const EAN13 = 1;
    public const EAN8 = 1 << 1;
    public const UPCA = 1 << 2;
    public const UPCE0 = 1 << 3;
    public const UPCE1 = 1 << 4;
    public const Code128 = 1 << 5;
    public const Code39 = 1 << 6;
    public const Code93 = 1 << 7;
    public const CodaBar = 1 << 8;
    public const QR = 1 << 9;
    public const Interleaved2of5 = 1 << 10;
    public const Industrial25 = 1 << 11;
    public const Matrix2of5 = 1 << 12;
    public const Code11 = 1 << 13;
    public const MSIPlessey = 1 << 14;
    public const DatabarRSS14 = 1 << 15;
    public const DatabarRSS14Expanded = 1 << 16;
    public const DatabarRSS14Limited = 1 << 17;
    public const DataMatrix = 1 << 18;
    public const PDF417 = 1 << 19;

    /**
     * @inheritDoc
     *
     * @return int[]
     */
    public static function values(): array
    {
        return [
            self::EAN13,
            self::EAN8,
            self::UPCA,
            self::UPCE0,
            self::UPCE1,
            self::Code128,
            self::Code39,
            self::Code93,
            self::CodaBar,
            self::QR,
            self::Interleaved2of5,
            self::Industrial25,
            self::Matrix2of5,
            self::Code11,
            self::MSIPlessey,
            self::DatabarRSS14,
            self::DatabarRSS14Expanded,
            self::DatabarRSS14Limited,
            self::DataMatrix,
            self::PDF417,
        ];
    }
}
