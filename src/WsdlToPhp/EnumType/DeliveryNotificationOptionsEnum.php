<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for DeliveryNotificationOptionsEnum EnumType
 * @subpackage Enumerations
 */
class DeliveryNotificationOptionsEnum extends AbstractStructEnumBase
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'OnSuccess'
     * @return string 'OnSuccess'
     */
    const VALUE_ON_SUCCESS = 'OnSuccess';
    /**
     * Constant for value 'OnFailure'
     * @return string 'OnFailure'
     */
    const VALUE_ON_FAILURE = 'OnFailure';
    /**
     * Constant for value 'Delay'
     * @return string 'Delay'
     */
    const VALUE_DELAY = 'Delay';
    /**
     * Constant for value 'Never'
     * @return string 'Never'
     */
    const VALUE_NEVER = 'Never';
    /**
     * Return allowed values
     * @uses self::VALUE_NONE
     * @uses self::VALUE_ON_SUCCESS
     * @uses self::VALUE_ON_FAILURE
     * @uses self::VALUE_DELAY
     * @uses self::VALUE_NEVER
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_NONE,
            self::VALUE_ON_SUCCESS,
            self::VALUE_ON_FAILURE,
            self::VALUE_DELAY,
            self::VALUE_NEVER,
        ];
    }
}
