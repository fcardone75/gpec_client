<?php

declare(strict_types=1);

namespace Bni\Gpec\WsdlToPhp\StructType;

use InvalidArgumentException;

/**
 * This class stands for GetMailRequest StructType
 * @subpackage Structs
 */
#[\AllowDynamicProperties]
class GetMailRequest extends BaseRequest
{
    /**
     * The keepActualSeenStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var bool
     */
    protected bool $keepActualSeenStatus;
    /**
     * The messageType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * @var string
     */
    protected string $messageType;
    /**
     * Constructor method for GetMailRequest
     * @uses GetMailRequest::setKeepActualSeenStatus()
     * @uses GetMailRequest::setMessageType()
     * @param bool $keepActualSeenStatus
     * @param string $messageType
     */
    public function __construct(bool $keepActualSeenStatus, string $messageType)
    {
        $this
            ->setKeepActualSeenStatus($keepActualSeenStatus)
            ->setMessageType($messageType);
    }
    /**
     * Get keepActualSeenStatus value
     * @return bool
     */
    public function getKeepActualSeenStatus(): bool
    {
        return $this->keepActualSeenStatus;
    }
    /**
     * Set keepActualSeenStatus value
     * @param bool $keepActualSeenStatus
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailRequest
     */
    public function setKeepActualSeenStatus(bool $keepActualSeenStatus): self
    {
        // validation for constraint: boolean
        if (!is_null($keepActualSeenStatus) && !is_bool($keepActualSeenStatus)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($keepActualSeenStatus, true), gettype($keepActualSeenStatus)), __LINE__);
        }
        $this->keepActualSeenStatus = $keepActualSeenStatus;

        return $this;
    }
    /**
     * Get messageType value
     * @return string
     */
    public function getMessageType(): string
    {
        return $this->messageType;
    }
    /**
     * Set messageType value
     * @param string $messageType
     * @return \Bni\Gpec\WsdlToPhp\StructType\GetMailRequest
     * @throws InvalidArgumentException
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\MsgType::getValidValues()
     * @uses \Bni\Gpec\WsdlToPhp\EnumType\MsgType::valueIsValid()
     */
    public function setMessageType(string $messageType): self
    {
        // validation for constraint: enumeration
        if (!\Bni\Gpec\WsdlToPhp\EnumType\MsgType::valueIsValid($messageType)) {
            throw new InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Bni\Gpec\WsdlToPhp\EnumType\MsgType', is_array($messageType) ? implode(', ', $messageType) : var_export($messageType, true), implode(', ', \Bni\Gpec\WsdlToPhp\EnumType\MsgType::getValidValues())), __LINE__);
        }
        $this->messageType = $messageType;

        return $this;
    }
}
