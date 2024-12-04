<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MsgType EnumType
 * @subpackage Enumerations
 */
class MsgType extends AbstractStructEnumBase
{
    /**
     * Constant for value 'message'
     * @return string 'message'
     */
    const VALUE_MESSAGE = 'message';
    /**
     * Constant for value 'acceptance'
     * @return string 'acceptance'
     */
    const VALUE_ACCEPTANCE = 'acceptance';
    /**
     * Constant for value 'delivery'
     * @return string 'delivery'
     */
    const VALUE_DELIVERY = 'delivery';
    /**
     * Constant for value 'all'
     * @return string 'all'
     */
    const VALUE_ALL = 'all';
    /**
     * Return allowed values
     * @uses self::VALUE_MESSAGE
     * @uses self::VALUE_ACCEPTANCE
     * @uses self::VALUE_DELIVERY
     * @uses self::VALUE_ALL
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_MESSAGE,
            self::VALUE_ACCEPTANCE,
            self::VALUE_DELIVERY,
            self::VALUE_ALL,
        ];
    }
}
