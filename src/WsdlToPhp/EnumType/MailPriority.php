<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MailPriority EnumType
 * @subpackage Enumerations
 */
class MailPriority extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Low'
     * @return string 'Low'
     */
    const VALUE_LOW = 'Low';
    /**
     * Constant for value 'Normal'
     * @return string 'Normal'
     */
    const VALUE_NORMAL = 'Normal';
    /**
     * Constant for value 'High'
     * @return string 'High'
     */
    const VALUE_HIGH = 'High';
    /**
     * Return allowed values
     * @uses self::VALUE_LOW
     * @uses self::VALUE_NORMAL
     * @uses self::VALUE_HIGH
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_LOW,
            self::VALUE_NORMAL,
            self::VALUE_HIGH,
        ];
    }
}
