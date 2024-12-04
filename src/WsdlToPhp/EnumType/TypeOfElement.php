<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for TypeOfElement EnumType
 * @subpackage Enumerations
 */
class TypeOfElement extends AbstractStructEnumBase
{
    /**
     * Constant for value 'uId'
     * @return string 'uId'
     */
    const VALUE_U_ID = 'uId';
    /**
     * Constant for value 'messageId'
     * @return string 'messageId'
     */
    const VALUE_MESSAGE_ID = 'messageId';
    /**
     * Return allowed values
     * @uses self::VALUE_U_ID
     * @uses self::VALUE_MESSAGE_ID
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_U_ID,
            self::VALUE_MESSAGE_ID,
        ];
    }
}
