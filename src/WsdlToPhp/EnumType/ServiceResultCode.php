<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for ServiceResultCode EnumType
 * @subpackage Enumerations
 */
class ServiceResultCode extends AbstractStructEnumBase
{
    /**
     * Constant for value 'WIP'
     * @return string 'WIP'
     */
    const VALUE_WIP = 'WIP';
    /**
     * Constant for value 'COMPLETE'
     * @return string 'COMPLETE'
     */
    const VALUE_COMPLETE = 'COMPLETE';
    /**
     * Constant for value 'WARNING'
     * @return string 'WARNING'
     */
    const VALUE_WARNING = 'WARNING';
    /**
     * Constant for value 'ERROR'
     * @return string 'ERROR'
     */
    const VALUE_ERROR = 'ERROR';
    /**
     * Constant for value 'EXCEPTION'
     * @return string 'EXCEPTION'
     */
    const VALUE_EXCEPTION = 'EXCEPTION';
    /**
     * Return allowed values
     * @uses self::VALUE_WIP
     * @uses self::VALUE_COMPLETE
     * @uses self::VALUE_WARNING
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_EXCEPTION
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_WIP,
            self::VALUE_COMPLETE,
            self::VALUE_WARNING,
            self::VALUE_ERROR,
            self::VALUE_EXCEPTION,
        ];
    }
}
