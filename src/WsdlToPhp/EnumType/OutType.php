<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for OutType EnumType
 * @subpackage Enumerations
 */
class OutType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'onlyHeaders'
     * @return string 'onlyHeaders'
     */
    const VALUE_ONLY_HEADERS = 'onlyHeaders';
    /**
     * Constant for value 'allMessage'
     * @return string 'allMessage'
     */
    const VALUE_ALL_MESSAGE = 'allMessage';
    /**
     * Constant for value 'uId'
     * @return string 'uId'
     */
    const VALUE_U_ID = 'uId';
    /**
     * Return allowed values
     * @uses self::VALUE_ONLY_HEADERS
     * @uses self::VALUE_ALL_MESSAGE
     * @uses self::VALUE_U_ID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_ONLY_HEADERS,
            self::VALUE_ALL_MESSAGE,
            self::VALUE_U_ID,
        ];
    }
}
