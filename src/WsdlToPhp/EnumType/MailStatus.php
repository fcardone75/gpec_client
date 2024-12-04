<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\EnumType;

use WsdlToPhp\PackageBase\AbstractStructEnumBase;

/**
 * This class stands for MailStatus EnumType
 * @subpackage Enumerations
 */
class MailStatus extends AbstractStructEnumBase
{
    /**
     * Constant for value 'Sending'
     * @return string 'Sending'
     */
    const VALUE_SENDING = 'Sending';
    /**
     * Constant for value 'Sent'
     * @return string 'Sent'
     */
    const VALUE_SENT = 'Sent';
    /**
     * Constant for value 'Retrying'
     * @return string 'Retrying'
     */
    const VALUE_RETRYING = 'Retrying';
    /**
     * Constant for value 'Delivered'
     * @return string 'Delivered'
     */
    const VALUE_DELIVERED = 'Delivered';
    /**
     * Constant for value 'Accepted'
     * @return string 'Accepted'
     */
    const VALUE_ACCEPTED = 'Accepted';
    /**
     * Constant for value 'Error'
     * @return string 'Error'
     */
    const VALUE_ERROR = 'Error';
    /**
     * Constant for value 'Received'
     * @return string 'Received'
     */
    const VALUE_RECEIVED = 'Received';
    /**
     * Constant for value 'Unknown'
     * @return string 'Unknown'
     */
    const VALUE_UNKNOWN = 'Unknown';
    /**
     * Return allowed values
     * @uses self::VALUE_SENDING
     * @uses self::VALUE_SENT
     * @uses self::VALUE_RETRYING
     * @uses self::VALUE_DELIVERED
     * @uses self::VALUE_ACCEPTED
     * @uses self::VALUE_ERROR
     * @uses self::VALUE_RECEIVED
     * @uses self::VALUE_UNKNOWN
     * @return string[]
     */
    public static function getValidValues(): array
    {
        return [
            self::VALUE_SENDING,
            self::VALUE_SENT,
            self::VALUE_RETRYING,
            self::VALUE_DELIVERED,
            self::VALUE_ACCEPTED,
            self::VALUE_ERROR,
            self::VALUE_RECEIVED,
            self::VALUE_UNKNOWN,
        ];
    }
}
