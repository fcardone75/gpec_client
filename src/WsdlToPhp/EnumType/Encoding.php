<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for Encoding EnumType
 * @subpackage Enumerations
 */
class Encoding extends AbstractStructEnumBase
{
    /**
     * Constant for value 'ASCII'
     * @return string 'ASCII'
     */
    const VALUE_ASCII = 'ASCII';
    /**
     * Constant for value 'UTF7'
     * @return string 'UTF7'
     */
    const VALUE_UTF_7 = 'UTF7';
    /**
     * Constant for value 'UTF8'
     * @return string 'UTF8'
     */
    const VALUE_UTF_8 = 'UTF8';
    /**
     * Constant for value 'Unicode'
     * @return string 'Unicode'
     */
    const VALUE_UNICODE = 'Unicode';
    /**
     * Constant for value 'UTF32'
     * @return string 'UTF32'
     */
    const VALUE_UTF_32 = 'UTF32';
    /**
     * Return allowed values
     * @uses self::VALUE_ASCII
     * @uses self::VALUE_UTF_7
     * @uses self::VALUE_UTF_8
     * @uses self::VALUE_UNICODE
     * @uses self::VALUE_UTF_32
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ASCII,
            self::VALUE_UTF_7,
            self::VALUE_UTF_8,
            self::VALUE_UNICODE,
            self::VALUE_UTF_32,
        ];
    }
}
